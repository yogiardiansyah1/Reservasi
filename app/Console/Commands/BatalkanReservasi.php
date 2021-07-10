<?php

namespace App\Console\Commands;

use App\Http\Controllers\MailController;
use App\Http\Controllers\ReservasiController;
use Illuminate\Console\Command;

class BatalkanReservasi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:cancel-reservation';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Membatalkan reservasi.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        date_default_timezone_set('Asia/Jakarta');
        $obj = new ReservasiController();
        $aktif = $obj->getReservasiAktif();

        foreach ($aktif as $a) {
            $tgl = $a->tanggal;
            $jam = date_format(date_create($tgl), 'H');
            $menit = date_format(date_create($tgl), 'i');
            if (date('H') == $jam) {
                $jarak = 5; // jarak waktu pembatalan reservasi [menit]
                if (date('i') >= ($menit + $jarak)) { 
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
                    $obj->cancel_reservation($data['id']);
                    $mail = new MailController();
                    $mail->cancel_reservation($data);
                }
            }
        }
    }
}
