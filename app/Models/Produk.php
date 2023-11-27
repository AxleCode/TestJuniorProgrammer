<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_produk';

    protected $fillable = [
        'nama_produk',
        'harga',
        'kategori_id',
        'status_id',
    ];

    // public function kategori()
    // {
    //     return $this->belongsTo(Kategori::class,'id_kategori');
    // }

    // public function status()
    // {
    //     return $this->belongsTo(Status::class,'id_status');
    // }
}
