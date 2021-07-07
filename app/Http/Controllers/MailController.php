<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send_reservation($data)
    {
        $person = ['email' => $data['email'], 'nama' => $data['nama']];
        Mail::send('layout/mail/reservation', ['detail' => $data], function ($mail) use ($person) {
            $mail->to($person['email'], $person['nama'])
                ->subject("Reservasi Berhasil");
        });
        if (Mail::failures()) {
            return "gagal mengirim email.";
        }
        return "berhasil mengirim email.";
    }

    public function attachment_email()
    {
        $penjualan = new PenjualanController();
        $penjualan->createxml();
        $penjualan->createcsv();

        $data = array('name' => "Yogi Ardiansyah");
        Mail::send('/layout/mail/penjualan', $data, function ($message) {
            $date = date('dmY');
            $path_csv = 'public/csv/';
            $csv_file_name = $path_csv . $date . '.csv';
            $message->to('yogiardiansyah12@gmail.com', 'Yogi Ardiansyah')->subject('Recap Penjualan');
            $message->attach($csv_file_name);
            $message->from('yogiardiansyah1111@gmail.com', 'Yogi Ardiansyah');
        });
    }

    public function cancel_reservation($data)
    {
        $person = ['email' => $data['email'], 'nama' => $data['nama']];
        Mail::send('layout/mail/reservation-cancel', ['detail' => $data], function ($mail) use ($person) {
            $mail->to($person['email'], $person['nama'])
                ->subject("Reservasi Dibatalkan");
        });
        if (Mail::failures()) {
            return "gagal mengirim email.";
        }
        return "berhasil mengirim email.";
    }
}
