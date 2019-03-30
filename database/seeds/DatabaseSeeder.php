<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');//mematikan fungsi pengamanan

        $this->call(UsersTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
