<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChuongtrinhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuongtrinh', function (Blueprint $table) {
            $table->bigIncrements('ct_id');
            $table->string('ct_buoi');
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
        Schema::dropIfExists('chuongtrinh');
    }
}
