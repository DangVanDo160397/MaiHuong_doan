<?php

use Illuminate\Database\Seeder;

class DichVuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dich_vu')->insert(
            [
                'ten_dich_vu' => 1,
                'gia_dich_vu' => 1,
                'chi_tiet_dich_vu' => 1,
            ]);
            // factory(Tours::class,50)->create();
    }
}
