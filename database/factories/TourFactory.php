<?php

use Faker\Generator as Faker;

$factory->define(App\Tour::class, function (Faker $faker) {
    return [
            'ten_tour' => $faker->sentence(3),
            'hinh_anh' => $faker->imageUrl($width = 400,$height = 480),
            'so_ngay' => 1,
            'ma_dia_diem' => 1,
            'so_cho' =>1,
            'gia_nguoi_lon' =>1,
            'gia_tre_em' =>1,
            'chi_tiet_tour' =>1,
            'ma_dich_vu' =>1,
            'ma_khuyen_mai' => 1,
            'loai_tour' => 1,
    ];
});
