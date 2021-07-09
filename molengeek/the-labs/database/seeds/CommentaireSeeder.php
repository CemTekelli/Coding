<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {      
        DB::table('commentaires')->insert([
        "text"=>"Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",
        "user_id"=>4,
        "article_id"=>1,
        "created_at" => now() 

     ]);  
        DB::table('commentaires')->insert([
        "text"=>"Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",
        "user_id"=>4,
        "article_id"=>2,
        "created_at" => now() 

     ]);
        DB::table('commentaires')->insert([
        "text"=>"Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",
        "user_id"=>4,
        "article_id"=>3,
        "created_at" => now() 

     ]);
        DB::table('commentaires')->insert([
        "text"=>"Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.",
        "user_id"=>4,
        "article_id"=>4,
        "created_at" => now() 

     ]);
        
    }
}
