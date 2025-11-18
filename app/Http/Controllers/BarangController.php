<?php

namespace App\Http\Controllers;

use App\Http\Requests\barang\StoreBarangRequest;
use App\Models\barang;
use App\Models\satuan;
use SweetAlert2\Laravel\Swal;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::with('satuan')->paginate(7);

        $rows = $barang->getCollection()->map(function ($item) {
            return [
                'kode'        => $item->kode,
                'nama'        => $item->nama_barang,
                'harga_jual'  => 'Rp ' . number_format($item->harga_jual, 0, ',', '.'),
                'stok'        => $item->jumlah_stok,
                'satuan'      => $item->satuan?->nama ?? '-',
                'action'      => [
                    [
                        'label'  => 'Edit',
                        'url'    => '/barang/edit/' . $item->id,
                        'method' => 'GET',
                    ],
                    [
                        'label'   => 'Hapus',
                        'color'   => 'danger',
                        'url'     => '/barang/hapus/' . $item->id,
                        'method'  => 'DELETE',
                        'confirm' => "confirmSwal(event, this, 'Yakin hapus {$item->nama_barang}?')",
                    ],
                ]
            ];
        })->toArray();

        // Ganti collection dengan array yang sudah di-map
        $barang->setCollection(collect($rows));

        return view('dashboard.barang.index', compact('barang'));
    }

    public function create()
    {
        $satuans = satuan::all();
        return view('dashboard.barang.tambah', [
            'satuans' => $satuans
        ]);
    }

    public function store(StoreBarangRequest $request)
    {
        barang::create($request->validated());
        Swal::success([
            'title' => 'Berhasil!',
            'text'  => 'Data barang berhasil ditambahkan',
        ]);
        return redirect('/barang');
    }

    public function edit($id)
    {
        $satuans = satuan::all();
        $barang = barang::findOrFail($id);
        return view('dashboard.barang.update', compact(['barang','satuans']));
    }

    public function destroy($id)
    {
        barang::destroy($id);

        Swal::success([
            'title' => 'Berhasil!',
            'text'  => 'Data barang berhasil dihapus',
        ]);

        return redirect('/barang');
    }

}
