<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');
        $users_id = DB::table('users')->pluck('id');

        for ($i=0; $i < 10; $i++) { 

        	$data[$i] = [
        		'user_id' 	    => $faker->randomElement($users_id),
                'category_id'   => $faker->randomElement($categories_id),
        		'title' 	    => $faker->sentence(3),
        		'content' 	    => $faker->paragraphs(3, true),
                'created_at'    => now(),
                'updated_at'    => now(),
        	];
        }

        DB::table('articles')->truncate();
        DB::table('articles')->insert($data);
    }
}
