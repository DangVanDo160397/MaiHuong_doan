<?php

use Illuminate\Database\Seeder;
use App\KhuyenMai;
class KhuyenMaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('khuyen_mai')->insert(
            [
                'gia_KM' => 1,
                'chi_tiet_KM' => 1,
            ]);
            // factory(Tours::class,50)->create();
    }
}
