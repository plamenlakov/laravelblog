<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'username' => Str::random(10),
            'password' => bcrypt('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'username' => Str::random(10),
            'password' => bcrypt('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'username' => Str::random(10),
            'password' => bcrypt('12345678'),
        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'username' => Str::random(10),
            'password' => bcrypt('12345678'),
        ]);
    }
}
