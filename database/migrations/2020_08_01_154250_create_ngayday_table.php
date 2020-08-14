<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNgaydayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngayday', function (Blueprint $table) {
            $table->bigIncrements('nd_id');
            $table->date('nd_ngay');
            $table->time('nd_giobatdau');
            $table->time('nd_gioketthuc');
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
        Schema::dropIfExists('ngayday');
    }
}
