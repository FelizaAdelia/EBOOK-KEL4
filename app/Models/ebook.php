<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
    protected $table = 'ebooks';
    protected $primaryKey = 'id_ebook';
    protected $fillable = [
        'id_kategori', 'judul_ebook', 'tahun_ebook', 'deskripsi_ebook', 'harga_ebook', 'sampul_ebook', 'file_ebook',
    ];

    public function kategori()
    {
        return $this->belongsTo('App\KategoriEbook', 'id_kategori', 'id_kategori');
    }

    public function pembelians()
    {
        return $this->hasMany('App\Pembelian', 'id_ebook', 'id_ebook');
    }
}
