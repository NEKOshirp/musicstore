<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:: table('users') ->insert([
            [
                'name'=>'user1',
                'email'=>'user1@gmail.com',
                'password'=>Hash::make('123'),
            ],
            [
                'name'=>'user2',
                'email'=>'user2@gmail.com',
                'password'=>Hash::make('12345'),
            ]
        ]);
    }
}
