<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1, 
                'kategori_id' => 1,
                'barang_kode' => 'MKN-001',
                'barang_nama' => 'Nasi Goreng',
                'harga_beli' => 10000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 2, 
                'kategori_id' => 1,
                'barang_kode' => 'MKN-002',
                'barang_nama' => 'Mie Goreng',
                'harga_beli' => 8000,
                'harga_jual' => 12000,
            ],
            [
                'barang_id' => 3, 
                'kategori_id' => 2,
                'barang_kode' => 'MNM-001',
                'barang_nama' => 'Es Teh',
                'harga_jual' => 5000,
                'harga_beli' => 3000,
            ],
            [
                'barang_id' => 4, 
                'kategori_id' => 2,
                'barang_kode' => 'MNM-002',
                'barang_nama' => 'Es Jeruk',
                'harga_jual' => 6000,
                'harga_beli' => 4000,
            ],
            [
                'barang_id' => 5, 
                'kategori_id' => 3,
                'barang_kode' => 'JKT-001',
                'barang_nama' => 'Jaket Parasut',
                'harga_jual' => 100000,
                'harga_beli' => 80000,
            ],
            [
                'barang_id' => 6, 
                'kategori_id' => 3,
                'barang_kode' => 'JKT-002',
                'barang_nama' => 'Jaket Kulit',
                'harga_jual' => 200000,
                'harga_beli' => 150000,
            ],
            [
                'barang_id' => 7, 
                'kategori_id' => 4,
                'barang_kode' => 'CLN-001',
                'barang_nama' => 'Celana Jeans',
                'harga_jual' => 150000,
                'harga_beli' => 100000,
            ],
            [
                'barang_id' => 8, 
                'kategori_id' => 4,
                'barang_kode' => 'CLN-002',
                'barang_nama' => 'Celana Jogger',
                'harga_jual' => 120000,
                'harga_beli' => 80000,
            ],
            [
                'barang_id' => 9, 
                'kategori_id' => 5,
                'barang_kode' => 'TPI-001',
                'barang_nama' => 'Topi Trucker',
                'harga_jual' => 50000,
                'harga_beli' => 30000,
            ],
            [
                'barang_id' => 10, 
                'kategori_id' => 5,
                'barang_kode' => 'TPI-002',
                'barang_nama' => 'Topi Snapback',
                'harga_jual' => 40000,
                'harga_beli' => 25000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
