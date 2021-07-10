<?php

namespace App\Console;

use App\Console\Commands\BatalkanReservasi;
use App\Console\Commands\KirimPenjualan;
use App\Http\Controllers\PenjualanController;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        KirimPenjualan::class,
        BatalkanReservasi::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('email:laporan')->dailyAt('16:00')->timezone('Asia/Jakarta');
        // $schedule->command('email:laporan')->everyMinute()->timezone('Asia/Jakarta');
        $schedule->command('email:cancel-reservation')->everyMinute();
    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
