<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class t_penjualan extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        for ($i = 1; $i <= 10; $i++) {
            $user_id = rand(1, 3);
            $pembeli = 'Buyer ' . $i;
            $penjualan_kode = 'PJ00' . $i;

            $data[] = [
                'user_id' => $user_id,
                'pembeli' => $pembeli,
                'penjualan_kode' => $penjualan_kode,
                'penjualan_tanggal' => now(),
            ];
        }
        DB::table('t_penjualan')->insert($data);
    }
}
