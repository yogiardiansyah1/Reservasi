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

        $resto = new RestoController();
        $managers = $resto->get_all_manager();


        foreach ($managers as $manager) {
            $person = ['email' => $manager->email, 'nama' => $manager->nama];
            Mail::send('layout/mail/penjualan', ['nama' => $manager->nama], function ($mail) use ($person) {
                $date = date('dmY');
                $path_csv = 'public/csv/';
                $path_xml = 'public/xml/';
                $csv_file_name = $path_csv . $date . '.csv';
                $xml_file_name = $path_xml . $date . '.xml';
                $mail->attach($csv_file_name);
                $mail->attach($xml_file_name);
                $mail->from('no-reply@reesto.com', 'REESTO [SYSTEM]');
                $mail->to($person['email'], $person['nama'])
                    ->subject("Laporan Penjualan pada tanggal " . date('d-m-Y'));
            });
            if (Mail::failures()) {
                return "gagal mengirim email.";
            }
            return "berhasil mengirim email.";
        }
    }

    public function cancel_reservation($data)
    {
        $person = ['email' => $data['email'], 'nama' => $data['nama']];
        Mail::send('layout/mail/reservation', ['detail' => $data], function ($mail) use ($person) {
            $mail->to($person['email'], $person['nama'])
                ->subject("Reservasi Dibatalkan");
        });
        if (Mail::failures()) {
            return "gagal mengirim email.";
        }
        return "berhasil mengirim email.";
    }
}
