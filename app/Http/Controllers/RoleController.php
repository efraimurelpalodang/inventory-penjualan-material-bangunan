<?php

namespace App\Http\Controllers;

use App\Models\role;
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
                    // 'url' => route('barang.edit', $item->id) // Asumsi route untuk edit
                    ],
                    [
                        'label' => 'Hapus',
                        'color' => 'danger',
                    // 'url' => route('barang.edit', $item->id) // Asumsi route untuk edit
                    ],
                ]
            ];
        })->toArray();

        return view('dashboard.role', [
            'roles' => $rows
        ]);
    }
}
