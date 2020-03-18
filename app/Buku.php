<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'bukus';
    protected $fillable = ['nama_buku','penerbit_buku','stok_barang','harga_buku'];
}
