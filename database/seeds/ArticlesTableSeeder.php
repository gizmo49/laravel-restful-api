<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesTableSeeder extends Seeder{
  
    public function run(){
         
         Article::truncate();

         $faker = \Faker\Factory::create();
 
        
         for ($i = 0; $i < 50; $i++) {
             Article::create([
                 'title' => $faker->sentence,
                 'body' => $faker->paragraph,
             ]);
         }
    }
}
