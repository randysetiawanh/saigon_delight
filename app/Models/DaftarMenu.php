<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarMenu extends Model
{
    use HasFactory;
    protected $table = 'daftarmenu';
    protected $primary_key = 'id';
    protected $fillable = [
        'kategori_id', 'kode_menu', 'nama_menu', 'harga_menu'
    ];
    
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    public function daftarmenu()
    {
        return $this->hasMany(Laporan::class);
    }
}
