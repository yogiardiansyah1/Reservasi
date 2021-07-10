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

    public function proses(Request $data)
    {
        if ($data['kursi'] > $this->getSisaKursi($data['tanggal'])['sisa']) {
            $msg = 'Jumlah kursi yang dipesan melebihi kapasitas tersisa.';
            $kapasitas = $this->getSisaKursi($data['tanggal']);
            $d = array(
                'msg' => $msg,
                'email' => $data['email'],
                'nama' => $data['nama'],
                'kapasitas' => $kapasitas['kapasitas'],
                'sisa' => $kapasitas['sisa']
            );
            return back()->with('data', $d);
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
        date_default_timezone_set('Asia/Jakarta');
        $dari = date('Y-m-d');
        $sampai = date_create($dari);
        date_add($sampai, date_interval_create_from_date_string("1 days"));
        $r = DB::table('reservasi')
            ->where('status', '1')
            ->whereBetween('tanggal', [$dari, $sampai])
            ->get();
        return $r;
    }

    public function cancel_reservation($id)
    {
        DB::table('reservasi')->where('id', $id)->update(['status' => '0']);
    
    }
    public function confirm_reservation(request $id)
    {
        DB::table('reservasi')->where('id', $id['id'])->update(['status' => '2']);
        return redirect('resto/reservasi');
    }

    public function batal()
    {
        $ass = [];
        date_default_timezone_set('Asia/Jakarta');
        $obj = new ReservasiController();
        $aktif = $obj->getReservasiAktif();

        foreach ($aktif as $a) {
            $tgl = $a->tanggal;
            $t = 'tanggal: ' . $tgl . '<br>';
            array_push($ass, $t);
            $jam = date_format(date_create($tgl), 'H');
            $j = 'Jam: ' . $jam . '<br>';
            array_push($ass, $j);
            $menit = date_format(date_create($tgl), 'i');
            $m = 'menit: ' . $menit . '<br>';
            array_push($ass, $m);
            if (date('H') == $jam) {
                if (date('i') >= $menit + 2) {
                    array_push($ass, $a->id . '<br>');
                    $tgl_batal = date_format(date_create($tgl), 'Y-m-d ' . $jam . ':' . $menit);
                    $data = [
                        'id' => $a->id,
                        'kursi' => $a->kursi,
                        'tanggal' => date_format(date_create($tgl), 'Y-m-d H:i'),
                        'status' => '0',
                        'nama' => $a->nama,
                        'email' => $a->email,
                        'batal' => $tgl_batal
                    ];
                    array_push($ass, $data['id'] . '<br>');
                    $obj->cancel_reservation($data['id']);
                    $mail = new MailController();
                    $mail->cancel_reservation($data);
                }
            }
        }
        return $ass;
    }
}
