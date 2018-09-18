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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => 'user@gmail.com',
            'password' => bcrypt('secret'),
        ]);
        DB::table('products')->insert([
            'name' => 'Shop Name 1',
            'image' => 'default.png',
            'distance' => 25,
        ]);
        DB::table('products')->insert([
            'name' => 'Shop Name 2',
            'image' => 'default.png',
            'distance' => 65,
        ]);
        DB::table('products')->insert([
            'name' => 'Shop Name 3',
            'image' => 'default.png',
            'distance' => 85,
        ]);
        DB::table('products')->insert([
            'name' => 'Shop Name 4',
            'image' => 'default.png',
            'distance' => 45,
        ]);
        DB::table('products')->insert([
            'name' => 'Shop Name 5',
            'image' => 'default.png',
            'distance' => 2154,
        ]);
        DB::table('products')->insert([
            'name' => 'Shop Name 6',
            'image' => 'default.png',
            'distance' => 74,
        ]);
        DB::table('products')->insert([
            'name' => 'Shop Name 7',
            'image' => 'default.png',
            'distance' => 28,
        ]);
        DB::table('products')->insert([
            'name' => 'Shop Name 8',
            'image' => 'default.png',
            'distance' => 78,
        ]);
    }
}
