<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoogleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('googles')->insert([
            'rue' =>"molengeek",
            'ville' =>"bruxelles",
            'pays' =>"belgique",
            "created_at" => now(),           
        ]);
    }
}
