<?php

namespace App\Exports;

use App\Models\bids;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BidsExport implements FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */

    private $barang_id;

    public function __construct($barang_id)
    {
        $this->barang_id = $barang_id;
    }

    public function collection()
    {
        return bids::where('barang_id', $this->barang_id)
            ->with('user') // Pastikan relasi 'user' sudah diatur di model Bid
            ->get()
            ->map(function ($bid) {
                return [
                    'user_name' => $bid->user->name, // Asumsi ada kolom 'name' di model User
                    'nominal_bid' => $bid->nominal_bid,
                    'created_at' => $bid->created_at->format('Y-m-d H:i:s'), // Format tanggal sesuai kebutuhan
                ];
            });
    }

    public function headings(): array
    {
        return [
            'User ID',
            'Nominal Bid',
            'Timestamp'
        ];
    }
}
