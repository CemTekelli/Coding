<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert([
            "slide_img"=>"img/01.jpg",
            "created_at" => now(),
        ]);
        DB::table('banners')->insert([
            "slide_img"=>"img/02.jpg",
            "created_at" => now(),
        ]);
    }
}
