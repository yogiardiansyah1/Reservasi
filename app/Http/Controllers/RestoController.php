<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestoController extends Controller
{
    public function cek_login(Request $data)
    {
        if (!(isset($data['id']) && isset($data['password']))) {
            return redirect('/resto/login')->with(['msg' => 'Request tidak valid.']);
        }
        $karyawan = DB::table('karyawan')->where('id', $data['id'])->get();
        foreach ($karyawan as $k) {
            if ($k->id == $data['id'] && $k->password == $data['password']) {
                session_start();
                $_SESSION['id'] = $data['id'];
                if (substr($k->id, 0, 1) == 'M')
                    return view('resto/karyawan');
                else {
                    return redirect('/resto/pembayaran');
                }
            }
        }
        return redirect('/resto/login')->with(['msg' => 'ID atau password salah.']);
    }

    public function logout(){
        session_start();
        unset($_SESSION['id']);
        unset($_SESSION['keranjang']);
        return redirect()->route('login');
    }

    public function get_all_manager(){
        return DB::table('karyawan')->where('id', 'LIKE', 'M-%')->get();
    }

    public function insert($data)
    {
        DB::table('karyawan')->insert($data);
    }

    public function getAll()
    {
        return DB::table('karyawan')->get();
    }
}
