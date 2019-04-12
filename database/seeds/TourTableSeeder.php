<?php

use Illuminate\Database\Seeder;
use App\Tour;

class TourTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tours')->insert(
            [
                'ten_tour' => 1,
                'hinh_anh' => 1,
                'so_ngay' =>1,
                'ma_dia_diem' =>1,
                'so_cho' =>1,
                'gia_nguoi_lon' =>1,
                'gia_tre_em' =>1,
                'chi_tiet_tour' =>1,
                'ma_dich_vu' =>1,
                'ma_khuyen_mai' => 1,
                'loai_tour' => 1,  
            ]);
            factory(Tour::class,50)->create();
    }
}
