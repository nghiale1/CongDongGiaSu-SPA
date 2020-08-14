<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaidangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baidang', function (Blueprint $table) {
            $table->bigIncrements('bd_id');
            $table->string('bd_tieude');
            $table->string('bd_noidung');
            $table->string('bd_ngaydang');
            $table->string('bd_thulao');

            $table->integer('')->index()->unsigned();

            $table->foreign('')->references('')->on('')->onDelete('cascade');
            $table->integer('')->index()->unsigned();

            $table->foreign('')->references('')->on('')->onDelete('cascade');
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
        Schema::dropIfExists('baidang');
    }
}
