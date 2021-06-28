<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ReservasiController extends Controller
{
    public function getById($id){
        return DB::table('reservasi')->where('id', $id)->get();
    }

    public function insert($data){
        DB::table('reservasi')->insert($data);
    }

    public function setAvailable($id){
        DB::table('reservasi')->where('id', $id)->update(array('status' => '0'));
    }

    public function getNotAvailable(){
        return DB::table('reservasi')->where('status', '1')->get();
    }
}
