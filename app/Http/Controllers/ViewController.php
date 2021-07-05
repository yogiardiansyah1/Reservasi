<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function resto()
    {
        session_start();
        if (!isset($_SESSION['id'])) {
            return redirect('/resto/login');
        }
        return view('resto/kasir');
    }

    public function resto_login()
    {
        return view('resto/login');
    }

    public function resto_pembayaran()
    {
        session_start();
        if (isset($_SESSION['id'])) {
            $object = new MenuController();
            return view('resto/pembayaran', ['menu' => $object->getAllMenu()]);
        } else {
            return redirect()->route('login');
        }
    }

    public function resto_penjualan()
    {
        return view('resto/penjualan');
    }

    public function resto_karyawan()
    {
        return view('resto/karyawan');
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
        if ($diff->format("%R%a") < 1)
            return redirect('/reservasi')->with(['message' => 'Tanggal tidak valid.']);

        $object = new ReservasiController();
        return view('reservasi/detail', ['tgl' => $data['tanggal'], 'data' => $object->getSisaKursi($tgl)]);
    }

    public function test()
    {
        return str_pad('1', 4, '0', STR_PAD_LEFT);
    }

    public function csv()
    {
        return view('penjualan/csv');
    }
}
