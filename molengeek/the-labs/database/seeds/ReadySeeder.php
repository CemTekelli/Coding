<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReadySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('readies')->insert([
            "titre" =>"Are you ready to stand out?",
            "titre2" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.",
            "button" =>"Browse",
        ]);
    }
}
