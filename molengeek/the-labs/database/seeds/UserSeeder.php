<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([
        "name"=> 'Admin',
        "prenom"=> 'Cem',
        "email"=> 'admin@exemple.com',
        "password"=> bcrypt('cece'),
        "role_id" => 1,
        "img_profil"=>"img/avatar/01.jpg",
        "created_at" => now() 
        
       ]);
       DB::table('users')->insert([
        "name"=> 'Webmaster',
        "prenom"=> 'Said',
        "email"=> 'webmaster@exemple.com',
        "password"=> bcrypt('cece'),
        "role_id" => 2,
        "img_profil"=>"img/logo.jpg",
        "created_at" => now() 
        
       ]);
       DB::table('users')->insert([
        "name"=> 'Redacteur',
        "prenom"=> 'Laurie',
        "email"=> 'redacteur@exemple.com',
        "password"=> bcrypt('cece'),
        "role_id" => 3,
        "description" =>"Ceci est ma descrpiton de Lore Redacteur TEST",
        "img_profil"=>"img/avatar/03.jpg",
        "created_at" => now() 
       ]);
       DB::table('users')->insert([
        "name"=> 'Romeo',
        "prenom"=> 'Romeo',
        "email"=> 'redacteur2@exemple.com',
        "password"=> bcrypt('cece'),
        "role_id" => 3,
        "description" =>"Ceci est ma descrpiton de Romeo Redacteur TEST",
        "img_profil"=>"img/avatar/03.jpg",
        "created_at" => now() 
       ]);

       DB::table('users')->insert([
        "name"=> 'Stan',
        "prenom"=> 'Julie',
        "email"=> 'membre@exemple.com',
        "password"=> bcrypt('cece'),
        "role_id" => 4,
        "img_profil"=>"img/avatar/01.jpg",
        "created_at" => now() 
       ]);
       DB::table('users')->insert([
        "name"=> 'Smith',
        "prenom"=> 'Mourad',
        "email"=> 'membre2@exemple.com',
        "password"=> bcrypt('cece'),
        "role_id" => 4,
        "img_profil"=>"img/avatar/02.jpg",
        "created_at" => now() 
       ]);
    }
}
