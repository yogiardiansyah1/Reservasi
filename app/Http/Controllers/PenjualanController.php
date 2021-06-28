<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    public function insert($data){
        DB::table('penjualan')->insert($data);
    }

    public function getAll(){
        return DB::table('penjualan')->get();
    }

    public function getPenjualanByRange($from, $to){
        // return DB::table('penjualan')->where('id', $from.'%')->get();
    }
}
