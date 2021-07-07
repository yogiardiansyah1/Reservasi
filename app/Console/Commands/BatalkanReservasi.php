<?php

namespace App\Console\Commands;

use App\Http\Controllers\ReservasiController;
use Illuminate\Console\Command;

class BatalkanReservasi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:reservasi';

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
        $obj = new ReservasiController();
        $aktif = $obj->getReservasiAktif();
        foreach($aktif as $a){
            if(date('H:i') == date_format(date_create($d->tanggal), 'H:i')){
                
            }
        }
    }
}
