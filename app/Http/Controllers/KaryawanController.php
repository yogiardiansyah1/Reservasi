<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class KaryawanController extends Controller
{
    public function cekLogin($id, $password)
    {
        if (!(isset($id) && isset($password))) {
            return 0;
        }
        $admin = DB::table('karyawan')->where('id', $id)->get();
        foreach ($admin as $data) {
            if ($data->password == $password) {
                return 1;
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
