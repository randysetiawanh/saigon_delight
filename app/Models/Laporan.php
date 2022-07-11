<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $table = 'laporan';
    protected $primary_key = 'id';
    protected $fillable = [
        'daftarmenu_id', 'harga_menu', 'jumlah', 'total'
    ];

    public function daftarmenu()
    {
        return $this->belongsTo(DaftarMenu::class);
    }
}
