<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    private $table_name = 'reservasi';
    public function getById($id)
    {
        return DB::table($this->table_name)->where('id', $id)->get();
    }

    public function proses (Request $data)
    {
        if ($data['kursi'] > $this->getSisaKursi($data['tanggal'])['sisa']) {
            $msg = 'Melebihi batas sisa kursi.';
            echo "<script type='text/javascript'>alert('$msg');</script>";
            return redirect('/reservasi')->with('message', $msg);
        }

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
        $mail = new MailController();
        $mail->send_reservation($r);
        return view('reservasi/berhasil', ['detail' => $r]);
    }

    public function getSisaKursi($tanggal)
    {
        $tanggal = date_create($tanggal);
        $dari = date_format($tanggal, 'Y-m-d');
        $sampai = $tanggal;
        date_add($sampai, date_interval_create_from_date_string("1 days"));
        $r = DB::table('reservasi')
            ->select('kursi')
            ->where('status', '1')
            ->whereBetween('tanggal', [$dari, $sampai])
            ->get()
            ->sum('kursi');
        $k = DB::table('kapasitas')
            ->select('kapasitas')
            ->get()[0]->kapasitas;
        return ['kapasitas' => $k, 'sisa' => ($k - $r)];
        // return $dari . " " . date_format($sampai, 'Y-m-d');
    }

    public function getReservasiAktif()
    {
    }
}
