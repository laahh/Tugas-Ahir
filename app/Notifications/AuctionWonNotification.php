<?php

namespace App\Notifications;

use App\Models\BarangLelang;
use App\Models\bids;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class AuctionWonNotification extends Notification
{
    use Queueable;
    private $auction;
    private $bid;


    public function __construct(BarangLelang $auction, bids $bid)
    {
        $this->auction = $auction;
        $this->bid = $bid;
    }


    public function via($notifiable)
    {
        return ['mail'];
    }


    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->view(
                'emails.winningBid',
                [
                    'namaBarang' => $this->bid->barang->nama_barang,
                    'nomorBarang' => $this->bid->barang->id,
                    'nominalBid' => $this->bid->nominal_bid,
                    'gambar' => $this->bid->barang->gambar,
                    'namaUser' => $this->bid->user->name,
                ]
            );
    }


    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
