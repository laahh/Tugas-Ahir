<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BarangLelang;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class bids extends Model
{
    use HasFactory;
    protected $table = 'bids';
    protected $guarded = ['id'];

    protected $casts = [
        'nominal_bid' => 'float' // Memastikan nominal_bid selalu di-handle sebagai float
    ];

    public function barang()
    {
        return $this->belongsTo(BarangLelang::class, 'barang_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
