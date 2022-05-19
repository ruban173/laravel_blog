<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        $tagsAll = \App\Models\Tag::factory(10)->create();

        $tags = \App\Models\Tag::factory(50)
            ->hasAttached(\App\Models\Article::factory(10)
                ->hasAttached($tagsAll[rand(0, 9)])
                ->hasComments(3))->create();


        /*\App\Models\Article::factory(10)
             ->hasComments(3)
             ->for( $tags)
             ->create();*/


    }
}
