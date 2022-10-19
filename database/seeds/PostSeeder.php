<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i <0; $i++){
            $post = new Post();
            $post->title = $faker->words(rand(5,18), true);
            $post->content = $faker-> paragraphs                                       
        }
    }
}
