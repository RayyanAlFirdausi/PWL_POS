<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class m_barang extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1,
                'barang_kode' => 'EL001',
                'barang_nama' => 'Laptop',
                'harga_beli' => '5000',
                'harga_jual' => '7000',
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'EL002',
                'barang_nama' => 'Handphone',
                'harga_beli' => '6000',
                'harga_jual' => '8000',
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BJ001',
                'barang_nama' => 'Wanita',
                'harga_beli' => '4000',
                'harga_jual' => '4500',
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'BJ002',
                'barang_nama' => 'Pria',
                'harga_beli' => '5000',
                'harga_jual' => '5500',
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BK001',
                'barang_nama' => 'Novel',
                'harga_beli' => '5000',
                'harga_jual' => '6000',
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'BK002',
                'barang_nama' => 'Dongeng',
                'harga_beli' => '6000',
                'harga_jual' => '8000',
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'KC001',
                'barang_nama' => 'Facial Wash',
                'harga_beli' => '3000',
                'harga_jual' => '5500',
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'KC002',
                'barang_nama' => 'Skincare',
                'harga_beli' => '3500',
                'harga_jual' => '6000',
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'AS001',
                'barang_nama' => 'Kacamata',
                'harga_beli' => '4000',
                'harga_jual' => '8000',
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'AS002',
                'barang_nama' => 'Dasi',
                'harga_beli' => '4500',
                'harga_jual' => '8500',
            ]

        ];
        DB::table('m_barang')->insert($data);
    }
}
