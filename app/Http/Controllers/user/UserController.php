<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function profile()
    {
        return view('user.profile')->with([
            'id'   => request()->id,
            'name' => request()->name
        ]);
    }
}
