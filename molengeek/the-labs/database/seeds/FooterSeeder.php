<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            "text"=>"2021 All rights reserved. Designed by Cem Tekelli ",
            "created_at" => now(),           
        ]);
    }
}
