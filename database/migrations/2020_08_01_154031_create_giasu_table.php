<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiasuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giasu', function (Blueprint $table) {
            $table->bigIncrements('gs_id');
            $table->string('gs_hinhdaidien');
            $table->text('gs_gioithieu');
            $table->string('gs_hoten');
            $table->string('gs_gioitinh');
            $table->date('gs_namsinh');
            $table->string('gs_sdt');
            $table->string('gs_diachi')->index();
            $table->string('gs_hocvan')->index();
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
        Schema::dropIfExists('giasu');
    }
}
