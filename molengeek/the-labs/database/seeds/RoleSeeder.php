<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'roles' )->insert( [
            'name' => 'Administrateur', 
            "created_at" => now() 

        ] );
        DB::table( 'roles' )->insert( [
            'name' => 'Webmaster',
            "created_at" => now() 

        ] );
        DB::table( 'roles' )->insert( [
            'name' => 'Rédacteur',
             "created_at" => now() 

        ] );
        DB::table( 'roles' )->insert( [
            'name' => 'Membre',
            "created_at" => now() 

        ] );
    }
}
