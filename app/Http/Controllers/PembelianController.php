<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function tambah_item(Request $data, $id)
    {
        $object = new MenuController();
        $i = $object->getMenuById($id);
        $item = array(
            'id' => $i['0']->id,
            'nama' => $i['0']->nama,
            'harga' => $i['0']->harga,
            'qty' => $data['qty']
        );
        session_start();
        if (!isset($_SESSION['keranjang'])) {
            $_SESSION['keranjang'] = array($item);
        } else {
            array_push($_SESSION['keranjang'], $item);
        }
        return redirect()->route('pembayaran');
        // return $s.'<br>'.sizeof($_SESSION['keranjang']).' | '.$_SESSION['keranjang'];
    }
}
