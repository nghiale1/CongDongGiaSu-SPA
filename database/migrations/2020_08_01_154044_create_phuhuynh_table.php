<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhuhuynhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phuhuynh', function (Blueprint $table) {
            $table->bigIncrements('ph_id');
            $table->string('ph_hinhdaidien');
            $table->text('ph_gioithieu');
            $table->string('ph_hoten');
            $table->string('ph_sdt');
            $table->string('ph_diachi');
            $table->string('ph_email');
            $table->string('username');
            $table->string('password');
            $table->string('remember_token',100)->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phuhuynh');
    }
}
