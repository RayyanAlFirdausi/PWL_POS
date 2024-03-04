<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class m_kategori extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_kode' => '1',
                'kategori_nama' => 'Elektronik',
            ],
            [
                'kategori_kode' => '2',
                'kategori_nama' => 'Baju',
            ],
            [
                'kategori_kode' => '3',
                'kategori_nama' => 'Buku',
            ],
            [
                'kategori_kode' => '4',
                'kategori_nama' => 'Kecantikan',
            ],
            [
                'kategori_kode' => '5',
                'kategori_nama' => 'Aksesoris',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
