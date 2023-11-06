<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInformasiProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informasi_produk', function (Blueprint $table) {
            $table->bigIncrements('id_produk');
            $table->string('nama_produk');
            $table->string('jenis_produk');
            $table->string('satuan_produk');
            $table->integer('harga_produk');
            $table->integer('stok_produk');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('informasi_produk');
    }
}
