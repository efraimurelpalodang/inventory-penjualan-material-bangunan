<?php

namespace App\Http\Controllers;

use App\Http\Requests\pengguna\StorePenggunaRequest;
use App\Http\Requests\pengguna\UpdatePenggunaRequest;
use App\Models\pengguna;
use App\Models\role;
use SweetAlert2\Laravel\Swal;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = pengguna::with('role')->paginate(7);
        $rows = $pengguna->getCollection()->map(function ($item) {
            return [
                'username'       => $item->username,
                'nama_pengguna'  => $item->nama_pengguna,
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

    public function create()
    {
        $roles = role::all();
        return view('dashboard.pengguna.tambah', compact('roles'));
    }

    public function store(StorePenggunaRequest $request)
    {
        pengguna::create($request->validated());
        Swal::success([
            'title' => 'Berhasil!',
            'text'  => 'Data pengguna berhasil ditambahkan',
        ]);
        return redirect('/pengguna');
    }

    public function edit(pengguna $pengguna)
    {
        $roles = role::all();
        return view('dashboard.pengguna.edit', compact('pengguna','roles'));
    }

    public function update(UpdatePenggunaRequest $request, pengguna $pengguna)
    {
        $data = $request->validated();

        if(empty($data['password'])) {
            unset($data['password']);
        }

        $pengguna->update($data);
        Swal::success([
            'title' => 'Berhasil!',
            'text'  => 'Data pengguna berhasil diperbaharui',
        ]);
        return redirect('/pengguna');
    }

    public function destroy($id)
    {
        pengguna::destroy($id);
        Swal::success([
            'title' => 'Berhasil!',
            'text'  => 'Data pengguna berhasil dihapus',
        ]);
        return redirect('/pengguna');
    }
}
