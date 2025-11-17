<?php

namespace App\Http\Controllers;

use App\Models\satuan;
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

        return view('dashboard.satuan', [
            'satuan' => $rows 
        ]);
    }
}
