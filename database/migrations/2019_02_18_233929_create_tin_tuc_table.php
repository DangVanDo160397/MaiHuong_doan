<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTinTucTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tin_tuc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tieu_de_tin_tuc');
            $table->text('hinh_anh_tin_tuc');
            $table->string('noi_dung_tin_tuc');
            $table->string('loai_tin_tuc');
            $table->unsignedInteger('ma_dia_diem');
            $table->foreign('ma_dia_diem')->references('id')->on('dia_diem');
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
        Schema::dropIfExists('tin_tuc');
    }
}
