<?php

namespace Database\Seeders;

use Database\Factories\ArticleFactory;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArticleFactory::new()->count(5000)->create();
    }
}
