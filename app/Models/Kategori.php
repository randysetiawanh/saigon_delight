<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';
    protected $primary_key = 'id';
    protected $fillable = [
        'id', 'nama_kategori'
    ];
    
    public function kategori()
    {
        return $this->hasMany(DaftarMenu::class);
    }
}
