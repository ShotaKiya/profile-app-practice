<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        //プロフィールで表示するデータの記入

        $data = [
            'name' => '山田　太郎',
            'age' => 25,
            'hobbies' => ['プログラミング','読書','旅行'],
        ];
        // profile.blade.phpにデータを引き渡す
        return view ('profile', $data);

    }
}
