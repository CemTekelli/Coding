<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(NavSeeder::class);
        $this->call(BannerSeeder::class);
        $this->call(SloganSeeder::class);
        $this->call(LogoSeeder::class);
        $this->call(IconSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(PresentationSeeder::class);
        $this->call(TestimonialSeeder::class);
        $this->call(TitreSeeder::class);
        $this->call(ReadySeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(CommentaireSeeder::class);
        $this->call(CategorieSeeder::class);
        $this->call(TagSeeder::class);
        $this->call(ArticleTagSeeder::class);
        $this->call(ArticleCategorieSeeder::class);
        $this->call(NewsletterSeeder::class);
        $this->call(GoogleSeeder::class);
        $this->call(FooterSeeder::class);
    }
}
