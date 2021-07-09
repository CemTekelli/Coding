<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'tags' )->insert( [
            'name' => 'branding',
        ] );
        DB::table( 'tags' )->insert( [
            'name' => 'identity',
        ] );
        DB::table( 'tags' )->insert( [
            'name' => 'video',
        ] );
        DB::table( 'tags' )->insert( [
            'name' => 'design',
        ] );
        DB::table( 'tags' )->insert( [
            'name' => 'inspiration',
        ] );
        DB::table( 'tags' )->insert( [
            'name' => 'web design',
        ] );
        DB::table( 'tags' )->insert( [
            'name' => 'photography',
        ] );
    }
}
