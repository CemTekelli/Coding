<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            "titre2"=>"Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. ",
            "titre3"=>"Main Office",
            "ville"=>"05200 Arévalo",
            "rue"=>"C/ Libertad, 34 ",
            "phone"=>"0034 37483 2445 322",
            "mail"=>"mail@exemple.com",
            "button"=>"send",
        ]);
    }
}
