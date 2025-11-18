<?php

namespace App\Http\Controllers;

use App\Models\pengguna;
use SweetAlert2\Laravel\Swal;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = pengguna::with('role')->paginate(7);
        $rows = $pengguna->getCollection()->map(function ($item) {
            return [
                'username'        => $item->username,
                'nama_pengguna'        => $item->nama_pengguna,
                'role_id'        => $item->role->nama_peran,
                'telp'        => $item->telp,
                'action'      => [
                    [
                        'label'  => 'Edit',
                        'url'    => route('pengguna.edit', $item),
                        'method' => 'GET',
                    ],
                    [
                        'label'   => 'Hapus',
                        'color'   => 'danger',
                        'url'     => route('pengguna.destroy', $item),
                        'method'  => 'DELETE',
                        'confirm' => 'confirmSwal(event, this)',
                    ],
                ]
            ];
        })->toArray();

        $pengguna->setCollection(collect($rows));

        return view('dashboard.pengguna.index', compact('pengguna'));
    }

    public function edit(pengguna $pengguna)
    {
        return view('dashboard.pengguna.edit', compact('pengguna'));
    }

    public function destroy($id)
    {
        pengguna::destroy($id);
        Swal::success([
            'title' => 'Berhasil!',
            'text'  => 'Data barang berhasil dihapus',
        ]);
        return redirect('/pengguna');
    }
}
