<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dat_tours', function (Blueprint $table) {
            $table->increments('id');
            $table->date('ngay_khoi_hanh')->nullable();
            $table->integer('so_dien_thoai_KH');
            $table->string('email_KH');
            $table->integer('so_nguoi_lon')->nullable();
            $table->integer('so_tre_em')->nullable();
            $table->string('gia_tien');
            $table->unsignedInteger('ma_tour')->nullable();
            $table->foreign('ma_tour')->references('id')->on('tours');
            $table->unsignedInteger('ma_tai_khoan')->nullable();
            $table->foreign('ma_tai_khoan')->references('id')->on('users');
            $table->unsignedInteger('ma_thanh_toan')->nullable();
            $table->foreign('ma_thanh_toan')->references('id')->on('thanh_toan');
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
        Schema::dropIfExists('dat_tours');
    }
}
