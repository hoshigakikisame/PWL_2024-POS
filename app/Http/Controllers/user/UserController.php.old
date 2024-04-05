<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data);

        // $user = UserModel::all();
        // return view('user', ['data' => $user]);

        // $user = UserModel::find(1);
        // return view('user', ['data' => $user]);

        // $user = UserModel::firstWhere('level_id', 1);
        // return view('user', ['data' => $user]);

        // $user = UserModel::findOr(20, ['username', 'nama'], function() {
        //     abort(404);
        // });
        // return view('user', ['data' => $user]);

        // $user = UserModel::findOrFail(1);
        // return view('user', ['data' => $user]);

        // $user = UserModel::where('username', 'manager9')->firstOrFail();
        // return view('user', ['data' => $user]);

        // $user = UserModel::where('level_id', 2)->count();
        // dd($user);

        // $user = UserModel::firstOrCreate(
        //     [
        //         'username' => 'manager',
        //         'nama' => 'Manager'
        //     ]
        // );

        // $user = UserModel::updateOrCreate(
        //     [
        //         'username' => 'manager22',
        //         'nama' => 'Manager Dua Dua',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ]
        // );

        // $user = UserModel::firstOrNew(
        //     [
        //         'username' => 'manager',
        //         'nama' => 'Manager'
        //     ]
        // );

        // $user = UserModel::create(
        //     [
        //         'username' => 'manager55',
        //         'nama' => 'Manager55',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ]
        // );

        // $user->username = 'manager56';

        // $user->isDirty();
        // $user->isDirty('username');
        // $user->isDirty('nama');
        // $user->isDirty(['nama', 'username']);

        // $user->isClean();
        // $user->isClean('username');
        // $user->isClean('nama');
        // $user->isClean(['nama', 'username']);

        // $user->save();

        // $user->isDirty();
        // $user->isClean();

        // dd($user->isDirty());


        // $user = UserModel::create(
        //     [
        //         'username' => 'manager11',
        //         'nama' => 'Manager11',
        //         'password' => Hash::make('12345'),
        //         'level_id' => 2
        //     ]
        // );

        // $user->username = 'manager12';
        
        // $user->save();

        // $user->wasChanged(); // true
        // $user->wasChanged('username'); // true
        // $user->wasChanged(['username', 'level_id']); // true
        // $user->wasChanged('nama'); // false
        // dd($user->wasChanged(['nama', 'username'])); // true

        $user = UserModel::with('level')->get();

        return view('user', ['data' => $user]);
    }

    public function tambah()
    {
        // return view('user_tambah');
        return view('forms/m_user/tambah');
    }

    public function tambah_simpan()
    {

        request()->validate([
            'username' => 'required',
            'nama' => 'required',
            'password' => 'required',
            'level_id' => 'required',
        ]);

        $data = [
            'username' => request()->username,
            'nama' => request()->nama,
            'password' => Hash::make(request()->password),
            'level_id' => request()->level_id,
        ];
        UserModel::create($data);

        return redirect('/user');
    }

    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user_ubah', ['data' => $user]);
    }

    public function ubah_simpan($id)
    {
        $user = UserModel::find($id);

        $user->username = request()->username;
        $user->nama = request()->nama;
        $user->password = Hash::make(request()->password);
        $user->level_id = request()->level_id;

        $user->save();

        return redirect('/user');
    }

    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }

    // public function profile()
    // {
    //     return view('user.profile')->with([
    //         'id'   => request()->id,
    //         'name' => request()->name
    //     ]);
    // }
}
