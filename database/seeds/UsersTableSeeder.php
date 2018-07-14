<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name' => 'Admin',
            'email' => 'admin@localhost.com',
            'password' => bcrypt('123456'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'about' => 'Admin User',
            'avatar' => 'uploads/avatars/default.jpg',  
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
