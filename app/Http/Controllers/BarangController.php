<?php

namespace App\Http\Controllers;

use App\Models\barang;

class BarangController extends Controller
{
    public function index()
    {
      // Ambil semua data barang dari database
        $barang = barang::all();
        
        // Format data untuk komponen table-row
        $rows = $barang->map(function ($item) {
            return [
                'kode' => $item->kode,
                'nama' => $item->nama_barang,
                'harga_jual' => 'Rp ' . number_format($item->harga_jual, 0, ',', '.'), // Format harga
                'stok' => $item->jumlah_stok,
                'satuan' => $item->satuan->nama,
                'action' => [
                    ['label' => 'Edit',
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

        return view('dashboard.barang', [
            'barang' => $rows
        ]);
    }
}
