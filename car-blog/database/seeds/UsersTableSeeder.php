<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $user = new User();

        $user->name = "admin";
        $user->email = 'admin@abv.bg';
        $user->username = "admin123";
        $user->password = bcrypt('123456789');
        $user->role = 'admin';
        $user->save();

        $user = new User();

        $user->name = "gosho";
        $user->email = 'gosho@abv.bg';
        $user->username = "gosho123";
        $user->password = bcrypt('123456789');
        $user->role = 'registered';
        $user->save();


        $user = new User();

        $user->name = "mitko";
        $user->email = 'mitko@abv.bg';
        $user->username = "mitko123";
        $user->password = bcrypt('123456789');
        $user->role = 'registered';
        $user->save();


        $user = new User();

        $user->name = "ivo";
        $user->email = 'ivo@abv.bg';
        $user->username = "ivo123";
        $user->password = bcrypt('123456789');
        $user->role = 'editor';
        $user->save();



    }
}
