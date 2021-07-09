<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'article__categories' )->insert( [
            'article_id' => 1,
            'categorie_id' => 2,
        ] );
        DB::table( 'article__categories' )->insert( [
            'article_id' => 1,
            'categorie_id' => 3,
        ] );
        DB::table( 'article__categories' )->insert( [
            'article_id' => 1,
            'categorie_id' => 5,
        ] );
        DB::table( 'article__categories' )->insert( [
            'article_id' => 2,
            'categorie_id' => 5,
        ] );
        DB::table( 'article__categories' )->insert( [
            'article_id' => 2,
            'categorie_id' => 4,
        ] );
        DB::table( 'article__categories' )->insert( [
            'article_id' => 2,
            'categorie_id' => 1,
        ] );
        DB::table( 'article__categories' )->insert( [
            'article_id' => 3,
            'categorie_id' => 5,
        ] );
        DB::table( 'article__categories' )->insert( [
            'article_id' => 3,
            'categorie_id' => 4,
        ] );
        DB::table( 'article__categories' )->insert( [
            'article_id' => 3,
            'categorie_id' => 1,
        ] );
    }
}
