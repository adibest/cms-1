<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// $data = [
    	// 	[
    	// 		'name' 			=> 'Suuur',
    	// 		'email' 		=> 'suuur@gmail.com',
    	// 		'password' 		=> bcrypt('secret'),
    	// 		'created_at' 	=> now(),
    	// 		'updated_at' 	=> now(),
    	// 	],
    	// 	[
    	// 		'name' 			=> 'Duuur',
    	// 		'email' 		=> 'duuur@gmail.com',
    	// 		'password' 		=> bcrypt('sret'),
    	// 		'created_at' 	=> now(),
    	// 		'updated_at' 	=> now(),
    	// 	],
    	// ];

    	$faker = Factory::create('id_ID');

    	for($i = 0; $i < 10; $i++) {

    		$data[$i] = [
    			'name' 			=> $faker->name,
    			'email' 		=> $faker->freeEmail,
    			'password' 		=> bcrypt('secret'),
    			'created_at' 	=> now(),
    			'updated_at' 	=> now(),
    		];
    	}

        DB::table('users')->truncate();
        DB::table('users')->insert($data);
    }
}
