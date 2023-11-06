<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_masuk', function (Blueprint $table) {
            $table->bigIncrements('id_barang_masuk');
            $table->string('nama_produk');
            $table->string('jenis_produk');
            $table->string('satuan_produk');
            $table->string('harga_produk');
            $table->string('jumlah_barang_masuk');
            $table->timestamp('waktu_barang_masuk');
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
        Schema::dropIfExists('barang_masuk');
    }
}
