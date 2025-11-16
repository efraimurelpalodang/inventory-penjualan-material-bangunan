<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                'nama' => 'PCS',
                'deskripsi' => 'Satuan per item',
            ],
            [
                'nama' => 'BOX',
                'deskripsi' => 'Berisi beberapa item dalam kotak',
            ],
            [
                'nama' => 'PACK',
                'deskripsi' => 'Satuan per bungkus',
            ],
            [
                'nama' => 'KG',
                'deskripsi' => 'Satuan kilogram untuk berat',
            ],
            [
                'nama' => 'LITER',
                'deskripsi' => 'Satuan volume cairan',
            ],
        ]);
    }
}
