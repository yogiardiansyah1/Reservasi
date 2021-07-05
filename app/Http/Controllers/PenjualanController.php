<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenjualanController extends Controller
{
    public function bayar(Request $data)
    {
        date_default_timezone_set('Asia/Jakarta');
        session_start();
        $keranjang = $_SESSION['keranjang'];


        $id = date('ymd');
        $count = DB::table('penjualan')->select('id')->where('id', 'like', $id . '%')->get()->count();
        $count = $count + 1;
        $id = $id . str_pad($count, 4, '0', STR_PAD_LEFT);

        $total = 0;
        $detail = array();
        foreach ($keranjang as $i) {
            $qty = $i['qty'];
            $harga = $i['harga'];
            $sub = $qty * $harga;
            $total = $total + $sub;
            $menu = array(
                'id_penjualan' => $id,
                'id_menu' => $i['id'],
                'qty' => $qty,
                'harga' => $harga,
                'subtotal' => $sub
            );
            array_push($detail, $menu);
        }

        $bayar = $data['bayar'];
        if ($bayar < $total) {
            return redirect()->route('pembayaran')->with(['msg' => 'Pembayaran Tidak Mencukupi']);
        }

        $ins = array(
            'id' => $id,
            'id_karyawan' => $_SESSION['id'],
            'total' => $total,
            'bayar' => $bayar,
            'tanggal' => date('Y-m-d H:i')
        );

        DB::table('penjualan')->insert($ins);
        DB::table('detail_penjualan')->insert($detail);
        unset($_SESSION['keranjang']);
        return redirect()->route('pembayaran');
    }

    public function getAll()
    {
        return DB::table('penjualan')->get();
    }

    public function getPenjualanByRange($from, $to)
    {
        // return DB::table('penjualan')->where('id', $from.'%')->get();
    }

    //Detail Penjualan
    public function getAlldetail()
    {
        return view('penjualan/xml', ['data' => DB::table('detail_penjualan')->get()]);
    }
}
