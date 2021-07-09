<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LogoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('logos')->insert([
           "url_logo"=>"img/big-logo.png",
            "created_at" => now(),
        ]);
    }
}
