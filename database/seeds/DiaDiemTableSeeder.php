<?php

use Illuminate\Database\Seeder;

class DiaDiemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dia_diem')->insert(
            [
                'ten_dia_diem' => 1,
                'tinh_thanh' => 1,
                'quoc_gia' => 1,
                'chi_tiet_dia_diem' => 1,
            ]);
            // factory(Tours::class,50)->create();
    }
}
