<?php

namespace App\Http\Controllers\user;

use App\Models\LevelModel;
use App\Http\Controllers\Controller;

class LevelController extends Controller
{
    public function index() {
        // DB::insert('insert into m_level(level_kode, level_nama, created_at) values(?, ?, ?)', ['CUS', 'Pelanggan', now()]);
        // return 'Insert data baru berhasil';

        // $row = DB::update('update m_level set level_nama = ? where level_kode = ?', ['Customer', 'CUS']);
        // return "Update data berhasil. Jumlah data yang diupdate $row baris";

        // $row = DB::delete('delete from m_level where level_kode = ?', ['CUS']);
        // return "Delete data berhasil. Jumlah data yang dihapus $row baris";

        $level = LevelModel::get();

        return view('forms/level/index', ['data' => $level]);
    }

    public function tambah()
    {
        // return view('user_tambah');
        return view('forms/level/tambah');
    }

    public function tambah_simpan()
    {
        request()->validate([
            'kodeLevel' => 'required',
            'namaLevel' => 'required',
        ]);

        $data = [
            'level_kode' => request()->kodeLevel,
            'level_nama' => request()->kodeNama,
        ];
        
        LevelModel::create($data);
        return redirect('/user');
    }
}
