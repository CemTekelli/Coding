<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titles')->insert([
            "about_titre" =>"GET IN (THE LAB) AND DISCOVER THE WORLD",
            "testimonial_titre" =>"WHAT OUR (CLIENTS) SAY",
            "service_titre" =>"GET IN THE (LAB) AND SEE THE SERVICES",
            "team_titre" => "GET IN THE LAB AND MEET (THE TEAM)",
            "contact_titre" => "CONTACT (US)",
            "servicePrime_titre" => "GET IN THE LAB AND (DISCOVER) THE WORLD",
        ]);
    }
}
