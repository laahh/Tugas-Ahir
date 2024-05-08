<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'barang_lelang_id', 'order_id', 'amount', 'status', 'payment_url', 'payment_details'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function barangLelang()
    {
        return $this->belongsTo(BarangLelang::class);
    }

    public function winningBid()
    {
        return $this->belongsTo(bids::class, 'winning_bid_id');
    }
}
