<?php

namespace App\Http\Controllers;

use App\Models\role;
use SweetAlert2\Laravel\Swal;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = role::all();
        $rows = $roles->map(function ($item) {
            return [
                'nama' => $item->nama_peran,
                'deskripsi' => $item->deskripsi,
                'action' => [
                    [
                        'label' => 'Edit',
                        'method' => 'GET',
                        'url' => 'peran/edit/'.$item->id, 
                    ],
                    [
                        'label' => 'Hapus',
                        'color' => 'danger',
                        'method' => 'DELETE',
                        'url' => 'peran/hapus/'.$item->id, 
                        'confirm' => 'confirmSwal(event, this)',
                    ],
                ]
            ];
        })->toArray();

        return view('dashboard.role', [
            'roles' => $rows
        ]);
    }

    public function destroy($id)
    {
        role::destroy($id);

        Swal::success([
            'title' => 'Berhasil!',
            'text'  => 'Data peran berhasil dihapus.',
        ]);

        return redirect('/peran');
    }
}
