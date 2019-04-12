<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ten_tour');
            $table->text('hinh_anh');
            $table->integer('so_ngay');
            $table->unsignedInteger('ma_dia_diem');
            $table->foreign('ma_dia_diem')->references('id')->on('dia_diem');
            $table->integer('so_cho');
            $table->integer('gia_nguoi_lon');
            $table->integer('gia_tre_em');
            $table->string('chi_tiet_tour');
            $table->unsignedInteger('ma_dich_vu');
            // $table->foreign('ma_dich_vu')->reference('id')->on('dich_vu');//
            $table->foreign('ma_dich_vu')->references('id')->on('dich_vu'); 
            $table->unsignedInteger('ma_khuyen_mai');
            $table->foreign('ma_khuyen_mai')->references('id')->on('khuyen_mai');
            
            $table->integer('loai_tour');
            $table->rememberToken();
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
        Schema::dropIfExists('tours');
    }
}

