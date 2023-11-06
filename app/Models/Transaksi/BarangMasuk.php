<?php

namespace App\Models\Transaksi;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class BarangMasuk extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    protected $table = 'barang_masuk';

    protected $fillable = [
        'id_barang_masuk', 'nama_produk', 'jenis_produk', 'satuan_produk', 'harga_produk', 'jumlah_barang_masuk', 'waktu_barang_masuk'
    ];

    public function InformasiProduk()
    {
        return $this->belongsTo('App\Models\Masterdata\InformasiProduk', 'id_produk', 'id_produk');
    }
}