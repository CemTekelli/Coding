<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            "icon_id" =>50,
            "titre"=>"Get in the lab",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),           
            ]);
        DB::table('services')->insert([
            "icon_id" =>18,
            "titre"=>"Projects online",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),           
            ]);
        DB::table('services')->insert([
            "icon_id" =>28,
            "titre"=>"SMART MARKETING",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),           
            ]);
        DB::table('services')->insert([
            "icon_id" =>36,
            "titre"=>"Social Media",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),           
            ]);
        DB::table('services')->insert([
            "icon_id" =>34,
            "titre"=>"Brainstorming",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),           
            ]);
        DB::table('services')->insert([
            "icon_id" =>12,
            "titre"=>"Documented",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),           
            ]);
        DB::table('services')->insert([
            "icon_id" =>49,
            "titre"=>"Responsive",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),           
            ]);
        DB::table('services')->insert([
            "icon_id" =>37,
            "titre"=>"Retina ready",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),           
            ]);
        DB::table('services')->insert([
            "icon_id" =>12,
            "titre"=>"Ultra modern",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),           
            ]);
        DB::table('services')->insert([
            "icon_id" =>25,
            "titre"=>"TEST",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla.",
            "created_at" => now(),           
            ]);
    }
}
