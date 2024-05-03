<?php

namespace Database\Seeders;

use App\Models\Director;
use App\Models\Management;
use App\Models\User;
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
        // User::factory(10)->create();

        DB::table('users')->insert([
            'id' => '3',
            'name' => 'billy',
            'email' => 'billy@ceec.com',
            'email_verified_at' => null,
            'password' => '$2y$12$Ni.HNi2m8AvvcvQYFRltReD.lJFfBKaoqkjrfEGym357GEiJU/7N2',
            'remember_token' => '',
            'created_at' => null,
            'updated_at' => null,
        ]);
        // Management::factory(100)->create();
        // Director::factory(100)->create();
    }
}
