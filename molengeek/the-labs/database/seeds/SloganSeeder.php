<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SloganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slogans')->insert([
            "slogan"=>"Get your freebie template now!",
            "created_at" => now(),
        ]);
    }
}
