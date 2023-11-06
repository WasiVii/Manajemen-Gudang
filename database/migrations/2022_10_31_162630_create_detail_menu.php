<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_menu', function (Blueprint $table) {
            $table->bigIncrements('detail_menu_id');
            $table->string('menu_id');
            $table->string('detail_menu_kode');
            $table->string('detail_menu_nama');
            $table->string('detail_menu_href');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_menu');
    }
}
