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
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'a@a',
            'password' => \Hash::make('aaaaaaaa'),
            'role' => 'admin',
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'b@b',
            'password' => \Hash::make('bbbbbbbb'),
            'role' => 'user',
        ]);
    }
}
