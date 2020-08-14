<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBangcapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bangcap', function (Blueprint $table) {
            $table->bigIncrements('bc_id');
            $table->string('bc_tenbangcap');
            $table->date('bc_ngaycap');
            $table->string('bc_hinhanh');
            $table->integer('bc_trangthai');
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
        Schema::dropIfExists('bangcap');
    }
}
