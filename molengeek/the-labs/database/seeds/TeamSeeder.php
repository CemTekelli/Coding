<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            "nom"=>"Williams",
            "prenom"=>"Christinne",
            "post"=>"Porjet Manager",
            "img_url"=>"img/team/1.jpg",
        ]);
    
        DB::table('teams')->insert([
            "nom"=>"Williams",
            "prenom"=>"Christinne",
            "post"=>"Digital Designer",
            "img_url"=>"img/team/2.jpg",
        ]);
    
        DB::table('teams')->insert([
            "nom"=>"Williams",
            "prenom"=>"Christinne",
            "post"=>"Ceo",
            "img_url"=>"img/team/3.jpg",
        ]);

    }
}
