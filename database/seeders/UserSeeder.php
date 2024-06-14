<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'admin',
                'dob' => '1999/09/09',
                'role' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin')
            ]
        ];
        DB::table('users')->insert($users);
    }
}
