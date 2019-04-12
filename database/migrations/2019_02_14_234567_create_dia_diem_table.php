<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiaDiemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dia_diem', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_dia_diem');
            $table->integer('tinh_thanh');
            $table->integer('quoc_gia');
            $table->string('chi_tiet_dia_diem');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dia_diem');
    }
}
