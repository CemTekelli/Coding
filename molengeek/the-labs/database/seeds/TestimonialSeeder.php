<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            "prenom" => "Michael",
            "nom" => "Smith",
            "post" => "CEO company",
            "commentaire" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
            "img_url" => "img/avatar/01.jpg",
            "created_at" => now(),

        ]);
        DB::table('testimonials')->insert([
            "prenom" => "Michael",
            "nom" => "Smith",
            "post" => "CEO company",
            "commentaire" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
            "img_url" => "img/avatar/02.jpg",
            "created_at" => now(),

        ]);
        DB::table('testimonials')->insert([
            "prenom" => "Michael",
            "nom" => "Smith",
            "post" => "CEO company",
            "commentaire" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
            "img_url" => "img/avatar/01.jpg",
            "created_at" => now(),

        ]);
        DB::table('testimonials')->insert([
            "prenom" => "Michael",
            "nom" => "Smith",
            "post" => "CEO company",
            "commentaire" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
            "img_url" => "img/avatar/02.jpg",
            "created_at" => now(),

        ]);
        DB::table('testimonials')->insert([
            "prenom" => "Michael",
            "nom" => "Smith",
            "post" => "CEO company",
            "commentaire" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
            "img_url" => "img/avatar/01.jpg",
            "created_at" => now(),

        ]);
        DB::table('testimonials')->insert([
            "prenom" => "Michael",
            "nom" => "Smith",
            "post" => "CEO company",
            "commentaire" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
            "img_url" => "img/avatar/02.jpg",
            "created_at" => now(),

        ]);
    }
}
