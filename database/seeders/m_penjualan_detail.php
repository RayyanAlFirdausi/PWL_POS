<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class m_penjualan_detail extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $penjualan_id = 1;

        for ($i = 1; $i <= 30; $i++) {
            $barang_id = rand(1, 10);
            $harga = 10000 + (rand(0, 18) * 5000);
            $jumlah = rand(1, 10);

            $data[] = [
                'penjualan_id' => $penjualan_id,
                'barang_id' => $barang_id,
                'harga' => $harga,
                'jumlah' => $jumlah,
            ];

            if ($i % 3 == 0) {
                $penjualan_id++;
            }
        }
        DB::table('m_penjualan_detail')->insert($data);
    }
}
