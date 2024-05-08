<?php

namespace App\Console\Commands;

use App\Models\BarangLelang;
use App\Models\bids;
use Illuminate\Console\Command;
use App\Notifications\AuctionWonNotification;

class SendAuctionWinningNotification extends Command
{

    protected $signature = 'auctions:check-winners';


    protected $description = 'Periksa pemenang lelang dan beritahukan mereka.';

    public function __construct()
    {
        parent::__construct();
    }


    public function handle()
    {
        // Ambil semua lelang yang telah berakhir dan belum diproses
        $auctions = BarangLelang::where('end_date', '<=', now())->where('is_processed', false)->get();

        foreach ($auctions as $auction) {
            // Ambil bid tertinggi untuk lelang ini
            $winningBid = $auction->bids()->orderBy('nominal_bid', 'desc')->first();

            if ($winningBid) {
                // Kirim notifikasi ke user yang menang
                $winningBid->user->notify(new AuctionWonNotification($auction, $winningBid));

                // Tandai bid sebagai pemenang
                $winningBid->status = 'Menang';  // Set status to 'Won' or any appropriate value
                $winningBid->save();

                // Tandai lelang sebagai diproses
                $auction->is_processed = true;
                $auction->save();
            }
        }

        $this->info('Pemenang lelang telah diperiksa, notifikasi dikirim, dan status bid diperbarui.');
    }
}
