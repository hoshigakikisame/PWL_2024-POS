<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'barang_id' => 1,
                'harga' => 10000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 1,
                'barang_id' => 2,
                'harga' => 20000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 1,
                'barang_id' => 3,
                'harga' => 30000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 4,
                'harga' => 40000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 5,
                'harga' => 50000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 6,
                'harga' => 60000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 7,
                'harga' => 70000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 8,
                'harga' => 80000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 9,
                'harga' => 90000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 10,
                'harga' => 100000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 1,
                'harga' => 110000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 2,
                'harga' => 120000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 3,
                'harga' => 130000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 4,
                'harga' => 140000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 5,
                'harga' => 150000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 6,
                'harga' => 160000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 7,
                'harga' => 170000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 8,
                'harga' => 180000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 9,
                'harga' => 190000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 10,
                'harga' => 200000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 1,
                'harga' => 210000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 2,
                'harga' => 220000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 3,
                'harga' => 230000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 4,
                'harga' => 240000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 5,
                'harga' => 250000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 6,
                'harga' => 260000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 7,
                'harga' => 270000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 8,
                'harga' => 280000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 9,
                'harga' => 290000,
                'jumlah' => 10,
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 10,
                'harga' => 300000,
                'jumlah' => 10,
            ],
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}
