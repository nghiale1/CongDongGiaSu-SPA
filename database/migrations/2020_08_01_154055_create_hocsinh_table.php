<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHocsinhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hocsinh', function (Blueprint $table) {
            $table->bigIncrements('hs_id');
            $table->string('hs_hinhdaidien');
            $table->text('hs_gioithieu');
            $table->string('hs_hoten');
            $table->string('hs_gioitinh');
            $table->date('hs_namsinh');
            $table->string('hs_trinhdo');
            $table->string('hs_hocluc');
            $table->string('hs_tentruong');
            $table->string('username');
            $table->string('password');
            $table->string('remember_token',100)->index();

            $table->integer('')->index()->unsigned();

            $table->foreign('')->references('')->on('')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hocsinh');
    }
}
