<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function index()
    {
        $data = [
            'nama' => 'Pelanggan Pertama'
        ];
        UserModel::where('username', 'customer-1')->update($data);

        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }

    // public function profile()
    // {
    //     return view('user.profile')->with([
    //         'id'   => request()->id,
    //         'name' => request()->name
    //     ]);
    // }
}
