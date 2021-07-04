<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function karyawan($path)
    {
        switch ($path) {
            case 'login':
                return view('karyawan/login');
                break;
            case 'edit':
                return view('karyawan/edit');
                break;
            default:
                return abort(404);
                break;
        }
    }

    public function reservasi_index()
    {
        return view('reservasi/index');
    }

    public function reservasi_detail(Request $data)
    {
        $tgl = str_replace('T', ' ', $data['tanggal']);

        $current = date_create(date('Y-m-d', time()));
        $picked_date = date_create($tgl);
        $diff = date_diff($current, $picked_date);
        if ($diff->format("%R%a") <= 0)
            return redirect('/reservasi')->with(['message' => 'Tanggal tidak valid.']);

        $object = new ReservasiController();
        return view('reservasi/detail', ['tgl' => $data['tanggal'], 'data' => $object->getSisaKursi($tgl)]);
    }

    public function test()
    {
        $tgl = '2021-07-02 4:00';
        $tgl = str_replace('T', ' ', $tgl);
        $current = date_create(date('Y-m-d', time()));
        $picked_date = date_create($tgl);
        $diff = date_diff($current, $picked_date);
        return date_format($current, 'Y-m-d') . ' - ' . date_format($picked_date, 'Y-m-d') . ' = ' . $diff->format("%R%a");
    }
}
