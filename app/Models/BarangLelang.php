<?php

namespace App\Models;

use App\Models\bids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BarangLelang extends Model
{
    use HasFactory;
    // tabel barang
    protected $table = 'barang_lelang';
    protected $guarded = ['id'];

    public function bids()
    {
        return $this->hasMany(bids::class, 'barang_id');
    }
}
