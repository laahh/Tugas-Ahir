<?php

namespace App\Console;

use App\Mail\WinningBidNotification;
use App\Models\BarangLelang;
use Illuminate\Support\Facades\Mail;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */

    protected function schedule(Schedule $schedule)
    {
        $schedule->command('auctions:check-winners')->everyMinute();
    }

    // protected function schedule(Schedule $schedule)
    // {
    //     $schedule->call(function () {
    //         $lelangSelesai = BarangLelang::where('end_date', '<', now())
    //             ->where('is_processed', false)  // Asumsi Anda memiliki field `is_processed`
    //             ->get();

    //         foreach ($lelangSelesai as $lelang) {
    //             $pemenang = $lelang->bids()
    //                 ->orderByDesc('nominal_bid')
    //                 ->first();

    //             if ($pemenang) {
    //                 Mail::to($pemenang->user->email)->send(new WinningBidNotification($pemenang));
    //                 $lelang->is_processed = true;
    //                 $lelang->save();
    //             }
    //         }
    //     })->everyMinute();  // Atau sesuaikan frekuensi yang Anda butuhkan
    // }



    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
