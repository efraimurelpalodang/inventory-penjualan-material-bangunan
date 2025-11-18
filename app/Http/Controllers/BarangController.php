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
                    [
                        'label' => 'Edit',
                        'url' => '/barang/edit/'.$item->id,
                        'method' => 'GET',
                    ],
                    [
                        'label' => 'Hapus',
                        'color' => 'danger',
                        'url' => '/barang/hapus/'.$item->id,
                        'method' => 'DELETE',
                        'confirm' => 'confirmSwal(event, this)',
                    ],
                ]
            ];
        })->toArray();

        return view('dashboard.barang.index', [
            'barang' => $rows
        ]);
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
