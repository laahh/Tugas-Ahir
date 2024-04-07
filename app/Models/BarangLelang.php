<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BarangLelang extends Model
{
    use HasFactory;
    // tabel barang
    protected $table = 'barang_lelang';
    protected $guarded = ['id'];
}
