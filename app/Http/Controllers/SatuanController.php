<?php

namespace App\Http\Controllers;

use App\Models\satuan;
use SweetAlert2\Laravel\Swal;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    public function index()
    {
        $satuan = satuan::all();
        $rows = $satuan->map(function ($item) {
            return [
                'nama' => $item->nama,
                'deskripsi' => $item->deskripsi,
                'action' => [
                    [
                        'label' => 'Edit',
                        'method' => 'PUT',
                        'url' => '/satuan/edit/'.$item->id 
                    ],
                    [
                        'label' => 'Hapus',
                        'color' => 'danger',
                        'method' => 'DELETE',
                        'url' => '/satuan/hapus/'.$item->id,
                        'confirm' => 'confirmSwal(event, this)',
                    ],
                ]
            ];
        })->toArray();

        return view('dashboard.satuan.index', [
            'satuan' => $rows 
        ]);
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
