<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

            //for Admin
            [
                'name'     => 'Admin',
                'username' => 'admin',
                'email'    => 'admin@gmail.com',
                'password' => Hash::make('123456'),
                'phone'    => '01677076763',
                'role'     => 'admin',
                'status'   => 'active'
            ],
        ]);
    }
}
