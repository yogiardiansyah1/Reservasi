<?php

namespace App\Console;

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
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('laporan:email')->dailyAt('23:59');
        $schedule->command('laporan:email')->everyMinute();

        // $schedule->call(function () {
        //     $cr = new PenjualanController();
        //     $cr->createxml();
        // })->daily();
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
