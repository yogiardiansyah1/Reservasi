<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send_reservation($data)
    {
        $person = ['email' => $data['email'], 'nama' => $data['nama']];
        Mail::send('layout/mail/reserved', ['detail' => $data], function ($mail) use ($person) {
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
        $data = array('name' => "Yogi Ardiansyah");
        Mail::send('/layout/mail/penjualan', $data, function ($message) {
            $date = date('d/m/Y');
            $dt = str_replace('/', '', $date);
            $path_csv = 'csv/';
            $csv_file_name = $path_csv . $dt . '.csv';
            $message->to('yogiardiansyah12@gmail.com', 'Yogi Ardiansyah')->subject('Recap Penjualan');
            $message->attach($csv_file_name);
            $message->from('yogiardiansyah1111@gmail.com', 'Yogi Ardiansyah');
        });
    }
}
