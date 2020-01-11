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
        factory(App\User::class, 5)->create()->each(function ($user) {
            $user->posts()->save(factory(App\Post::class)->make());
            $user->posts()->save(factory(App\Post::class)->make());
            $user->profile()->update(factory(App\Profile::class)->make()->toArray());
        });

        $user = new User();

        $user->name = "admin";
        $user->email = 'admin@abv.bg';
        $user->username = "admin";
        $user->password = bcrypt('123456789');
        $user->role = 'admin';
        $user->save();

        $user = new User();

        $user->name = "editor";
        $user->email = 'editor@abv.bg';
        $user->username = "editor";
        $user->password = bcrypt('123456789');
        $user->role = 'editor';
        $user->save();
    }
}
