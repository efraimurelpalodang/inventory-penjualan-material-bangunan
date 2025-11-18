<?php

namespace App\Http\Controllers;

use App\Http\Requests\role\StoreRoleRequest;
use App\Http\Requests\role\UpdateRoleRequest;
use App\Models\role;
use SweetAlert2\Laravel\Swal;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = role::with('pengguna')->paginate(5);
        $rows = $roles->getCollection()->map(function ($item) {
            return [
                'nama' => $item->nama_peran,
                'deskripsi' => $item->deskripsi,
                'action' => [
                    [
                        'label' => 'Edit',
                        'method' => 'GET',
                        'url' => route('role.edit', $item), 
                    ],
                    [
                        'label' => 'Hapus',
                        'color' => 'danger',
                        'method' => 'DELETE',
                        'url' => route('role.destroy', $item),
                        'confirm' => 'confirmSwal(event, this)',
                    ],
                ]
            ];
        })->toArray();

        $roles->setCollection(collect($rows));

        return view('dashboard.role.index', compact('roles'));
    }

    public function create()
    {
        return view('dashboard.role.tambah');
    }

    public function store(StoreRoleRequest $request)
    {
        role::create($request->validated());
        Swal::success([
            'title' => 'Berhasil!',
            'text'  => 'Data satuan berhasil ditambahkan',
        ]);
        return redirect('/role');
    }

    public function edit(role $role) 
    {
        return view('dashboard.role.edit', compact('role'));
    }

    public function update(UpdateRoleRequest $request, role $role)
    {
        $id = $role->id;
        $role = role::findOrFail($id);
        $role->update($request->validated());

        Swal::success([
            'title' => 'Berhasil!',
            'text'  => 'Data peran berhasil diubah',
        ]);

        return redirect('/role');
    }

    public function destroy($id)
    {
        try {
            role::destroy($id);
            Swal::success([
                'title' => 'Berhasil!',
                'text'  => 'Data peran berhasil dihapus.',
            ]);
        } catch (QueryException $e) {
            Swal::error([
                'title' => 'Oops...',
                'text'  => 'Data peran tidak dapat dihapus karna data pengguna menggunakan peran ini',
            ]);
        }

        return redirect('/role');
    }
}
