<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker =  Factory::create('id_ID');

        for ($i=0; $i < 10; $i++) { 
        	
        	$data[$i] = [
        		'name'         	=> $faker->sentence(1),
        		'created_at' 	=> now(),
    			'updated_at' 	=> now(),
        	];
        }

        DB::table('categories')->truncate();
        DB::table('categories')->insert($data);
    }
}
