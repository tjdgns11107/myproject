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
        App\User::create([
            'user_id' => 'admin',
            'name' => 'admin',
            'email' => 'root@php.com',
            'phone' => '012-3456-7890',
            'password' =>bcrypt('admin'),
            'admin' => 1,
        ]);

        App\User::create([
            'user_id' => 'test',
            'name' => 'test',
            'email' => 'test@test.com',
            'phone' => '010-3456-7890',
            'password' =>bcrypt('testtest'),
        ]);

        App\User::create([
            'user_id' => 'test2',
            'name' => 'test2',
            'email' => 'test2@test.com',
            'phone' => '010-1456-7890',
            'password' =>bcrypt('testtest'),
        ]);
        
    }
}
