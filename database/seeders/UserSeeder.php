<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin0',
            'image' => 'default0.jpg', 
            'description' => 'admin0',
            'user_agent' => 'admin0',
            'ip' => '127.0.0.0',
            'email' => 'admin0@gmail.com',
            'password' => bcrypt('admin0'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
