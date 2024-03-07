<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 3,
                'pembeli' => 'Rian',
                'penjualan_kode' => '00000000000000000001',
                'penjualan_tanggal' => '2024-03-06'
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Rian',
                'penjualan_kode' => '00000000000000000002',
                'penjualan_tanggal' => '2024-03-06'
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Rian',
                'penjualan_kode' => '00000000000000000003',
                'penjualan_tanggal' => '2024-03-06'
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Rian',
                'penjualan_kode' => '00000000000000000004',
                'penjualan_tanggal' => '2024-03-06'
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Rian',
                'penjualan_kode' => '00000000000000000005',
                'penjualan_tanggal' => '2024-03-06'
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 3,
                'pembeli' => 'Rian',
                'penjualan_kode' => '00000000000000000006',
                'penjualan_tanggal' => '2024-03-06'
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 3,
                'pembeli' => 'Rian',
                'penjualan_kode' => '00000000000000000007',
                'penjualan_tanggal' => '2024-03-06'
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 3,
                'pembeli' => 'Rian',
                'penjualan_kode' => '00000000000000000008',
                'penjualan_tanggal' => '2024-03-06'
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 3,
                'pembeli' => 'Rian',
                'penjualan_kode' => '00000000000000000009',
                'penjualan_tanggal' => '2024-03-06'
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 3,
                'pembeli' => 'Rian',
                'penjualan_kode' => '00000000000000000010',
                'penjualan_tanggal' => '2024-03-06'
            ]
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
