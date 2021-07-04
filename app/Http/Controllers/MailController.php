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
}
