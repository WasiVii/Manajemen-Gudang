<?php

namespace App\Models\Masterdata;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class InformasiProduk extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'informasi_produk';

    protected $fillable = [
        'id_produk', 'nama_produk', 'jenis_produk', 'satuan_produk', 'harga_produk', 'stok_produk', 
    ];
}