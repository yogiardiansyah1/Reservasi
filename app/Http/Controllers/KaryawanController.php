<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function cekLogin(Request $data)
    {
        if (!(isset($data['id']) && isset($data['password']))) {
            return 0;
        }
        $admin = DB::table('karyawan')->where('id', $data['id'])->get();
        foreach ($admin as $adm) {
            if ($adm->password == $data['password']) {
                if (str_contains ($data['id'],"M")) {
                    return redirect('/karyawan');
                } else
                    return redirect('/menu');
            } else {
                return 0;
            }
        }
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
