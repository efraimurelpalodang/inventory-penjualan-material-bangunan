<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            [
                'nama_peran' => 'Admin',
                'deskripsi' => 'petugas untuk mengelola semua data'
            ],
            [
                'nama_peran' => 'Sales',
                'deskripsi' => 'pengelola transaksi pembelian dari pembeli'
            ],
            [
                'nama_peran' => 'Admin Gudang',
                'deskripsi' => 'Pengelola data barang keluar dan masuk'
            ],
            [
                'nama_peran' => 'Staff Inventaris',
                'deskripsi' => 'pembuat laporan dan pembuatan surat jalan'
            ],
        ]);
    }
}
