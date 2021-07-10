<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function tambah_item(Request $data, $id)
    {
        $object = new MenuController();
        $i = $object->getMenuById($id);
        $item = [
            'id' => $id,
            'nama' => $i['0']->nama,
            'harga' => $i['0']->harga,
            'qty' => $data['qty']
        ];
        session_start();
        if (!isset($_SESSION['keranjang'])) {
            $_SESSION['keranjang'] = ['0' => $item];
        } else {
            foreach ($_SESSION['keranjang'] as $idx => $dt) {
                if ($dt['id'] == $id) {
                    $_SESSION['keranjang'][$idx]['qty'] = $_SESSION['keranjang'][$idx]['qty'] + $data['qty'];
                    return redirect()->route('pembayaran');
                }
            }
            // $idx = sizeof($_SESSION['keranjang']);
            // $_SESSION['keranjang'][$idx] = $item;
            array_push($_SESSION['keranjang'], $item);
        }
        return redirect()->route('pembayaran');
        // return $s.'<br>'.sizeof($_SESSION['keranjang']).' | '.$_SESSION['keranjang'];
    }
}
