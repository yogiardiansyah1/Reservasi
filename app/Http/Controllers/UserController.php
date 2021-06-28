<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    public function getByUsername($username)
    {
        return DB::table('user')->where('username', $username)->get();
    }

    public function insert($data)
    {
        DB::table('user')->insert($data);
    }

    public function checkLogin(Request $data)
    {
        $user = DB::table('user')->where('username', $data['username'])->get();
        foreach ($user as $us) {
            if ($us->password == $data['password']) {
                return redirect ('/user/berhasil');
            } else {
                return 0;
            }
        }
    }

    public function changePassword($username, $password){
        DB::table('user')->where('username', $username)->update(array('password' => $password));
    }
}
