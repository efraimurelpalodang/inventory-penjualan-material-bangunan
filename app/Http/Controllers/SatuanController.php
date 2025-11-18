<?php

namespace App\Http\Controllers;

use App\Http\Requests\satuan\StoreSatuanRequest;
use App\Http\Requests\satuan\UpdateSatuanRequest;
use App\Models\satuan;
use SweetAlert2\Laravel\Swal;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    public function index()
    {
        $satuan = satuan::with('barang')->paginate(5);
        $rows = $satuan->getCollection()->map(function ($item) {
            return [
                'nama' => $item->nama,
                'deskripsi' => $item->deskripsi,
                'action' => [
                    [
                        'label' => 'Edit',
                        'method' => 'GET',
                        'url' => route('satuan.edit', $item),
                    ],
                    [
                        'label' => 'Hapus',
                        'color' => 'danger',
                        'method' => 'DELETE',
                        'url' => route('satuan.destroy', $item),
                        'confirm' => 'confirmSwal(event, this)',
                    ],
                ]
            ];
        })->toArray();

        $satuan->setCollection(collect($rows));

        return view('dashboard.satuan.index', compact('satuan'));
    }

    public function create()
    {
        return view('dashboard.satuan.tambah');
    }

    public function store(StoreSatuanRequest $request)
    {
        satuan::create($request->validated());
        Swal::success([
            'title' => 'Berhasil!',
            'text'  => 'Data satuan berhasil ditambahkan',
        ]);
        return redirect('/satuan');
    }

    public function edit(satuan $satuan)
    {
        return view('dashboard.satuan.edit', compact('satuan'));
    }

    public function update(UpdateSatuanRequest $request, satuan $satuan)
    {
        $id = $satuan->id;
        $satuan = satuan::findOrFail($id);
        $satuan->update($request->validated());

        Swal::success([
            'title' => 'Berhasil!',
            'text'  => 'Data satuan berhasil diubah',
        ]);

        return redirect('/satuan');
    }

    public function destroy($id)
    {
        try {
            satuan::destroy($id);
            Swal::success([
                'title' => 'Berhasil!',
                'text'  => 'Data satuan berhasil dihapus.',
            ]);
        } catch (QueryException $e) {
            Swal::error([
                'title' => 'Oops...',
                'text'  => 'Data satuan tidak dapat dihapus karna data barang menggunakan satuan ini',
            ]);
        }

        return redirect('/satuan');
    }
}
