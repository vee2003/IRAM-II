<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'ICT Coordinator',
                'email' => 'ict@example.com',
                'password' => Hash::make('password'),
                'role' => 'ICT Coordinator',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Master Teacher',
                'email' => 'master@example.com',
                'password' => Hash::make('password'),
                'role' => 'Master Teacher',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Principal',
                'email' => 'principal@example.com',
                'password' => Hash::make('password'),
                'role' => 'Principal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
