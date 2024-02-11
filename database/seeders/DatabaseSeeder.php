<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'id' => 1,
                'name' => 'David',
                'email' => 'davidvillalvaa@outlook.com',
                'email_verified_at' => null,
                'password' => '$2y$12$ZmU/Bn83EWqVc8ucDOIQJebt0QaFvVaezyrAYFp1JrZPnPR8smkNW',
                'remember_token' => null,
                'created_at' => '2023-12-14 18:18:13',
                'updated_at' => '2023-12-14 18:18:13',
                'username' => 'davvilari',
                'image_url' => 'default.png'
            ],
            [
                'id' => 8,
                'name' => 'npc',
                'email' => 'npc@npc',
                'email_verified_at' => null,
                'password' => '$2y$12$7M/P1uqwEeT5pQ8CXz9WgO0HRFl7f6rHv5kpMsQsj0rwACwL0/RlW',
                'remember_token' => null,
                'created_at' => '2023-12-17 23:24:30',
                'updated_at' => '2023-12-17 23:24:30',
                'username' => 'npc',
                'image_url' => 'npc/profile.png'
            ],
            [
                'id' => 10,
                'name' => 'pepa',
                'email' => 'pepapig@oink.com',
                'email_verified_at' => null,
                'password' => '$2y$12$y66anK.KsChNGYsOSyzWDeu5QBQgvCAhmZNq.PH7mBhIqVXWHwynG',
                'remember_token' => null,
                'created_at' => '2023-12-18 14:57:42',
                'updated_at' => '2023-12-18 14:57:42',
                'username' => 'pig123',
                'image_url' => 'pig123/pepa.jpeg'
            ],
        ]);
    }
}
