<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDanhgiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('danhgia', function (Blueprint $table) {
            $table->bigIncrements('dg_id');
            $table->string('dg_noidung');
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
        Schema::dropIfExists('danhgia');
    }
}
