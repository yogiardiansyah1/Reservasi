<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ReservasiController extends Controller
{
    private $table_name = 'reservasi';
    public function getById($id)
    {
        return DB::table($this->table_name)->where('id', $id)->get();
    }

    public function proses(Request $data)
    {
        $token = "";
        $characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $characters .= "0123456789";
        do {
            mt_srand(rand());

            for ($i = 0; $i < 9; $i++) {
                $token .= $characters[mt_rand(0, strlen($characters) - 1)];
            }
        } while (!$this->getById($token)->isEmpty());
        $tgl = str_replace('T', ' ', $data['tanggal']);
        $r = [
            'id' => $token,
            'kursi' => $data['kursi'],
            'tanggal' => $tgl,
            'status' => '1',
            'nama' => $data['nama'],
            'email' => $data['email']
        ];
        DB::table($this->table_name)->insert($r);
        return view('reservasi/sukses', ['detail' => $r]);
    }

    public function getSisaKursi(){
        $kapasitas = DB::table('kapasitas')->get()->kapasitas;

    }

    public function getReservasiAktif(){
        
    }
}
