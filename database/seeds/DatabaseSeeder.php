<?php

use Illuminate\Database\Seeder;
use App\Admin;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'H',
            'email' => 'admin@gmail.com',
            'so_dien_thoai' => '123456',
            'password' => bcrypt('123456')
        ]);
        // $this->call(UsersTableSeeder::class);
        $this->call(DiaDiemTableSeeder::class);
        $this->call(KhuyenMaiTableSeeder::class);
        $this->call(DichVuTableSeeder::class);
         $this->call(TourTableSeeder::class);


    }
}
