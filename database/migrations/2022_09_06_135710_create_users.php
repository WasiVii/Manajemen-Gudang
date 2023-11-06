<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('username');
            $table->string('password');
            $table->integer('role_id');
            $table->date('user_date_of_birth');
            $table->string('user_place_of_birth', (50));
            $table->string('gender_id', (1));
            $table->string('religion_id', (1));
            $table->string('user_domisili_address', (255));
            $table->string('user_provinsi', (100));
            $table->string('user_kecamatan', (100));
            $table->string('user_city', (100));
            $table->char('user_postal_code', (10));
            $table->string('user_phone_number', (15));
            $table->timestamps();
            $table->timestamp("login_date")->nullable();
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
        Schema::dropIfExists('users');
    }
}
