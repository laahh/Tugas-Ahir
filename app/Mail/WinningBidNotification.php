<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\bids;

class WinningBidNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $bid;

    public function __construct(bids $bid)
    {
        $this->bid = $bid;
    }


    /**
     * Create a new message instance.
     *
     * @return void
     */


    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            subject: ' Notification',
        );
    }

    public function build()
    {
        return $this->view('emails.winningBid')
            ->with([
                'namaBarang' => $this->bid->barang->nama_barang,
                'nomorBarang' => $this->bid->barang->id,
                'nominalBid' => $this->bid->nominal_bid,
                'gambar' => $this->bid->barang->gambar,
                'namaUser' => $this->bid->user->name,


            ]);
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'admin.pages.riwayat.index',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
