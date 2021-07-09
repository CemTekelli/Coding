<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navs')->insert([
            "name"=>"Home",
            "name2"=>"Service",
            "name3"=>"Blog",
            "name4"=>"Contact",
            "created_at" => now(),
        ]);

    }
}
