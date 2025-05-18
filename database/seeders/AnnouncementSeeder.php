<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnouncementSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('announcements')->insert([
            [
                'title' => 'Welcome Back to School!',
                'body' => 'School year 2025 starts next month! Get ready!',
                'date' => now(),
                'user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
