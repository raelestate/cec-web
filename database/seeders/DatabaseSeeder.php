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

        // DB::table('users')->insert([
        //     'id' => '1',
        //     'name' => 'Rhyll',
        //     'email' => 'rhyll@cec.com',
        //     'email_verified_at' => null,
        //     'password' => '$2y$12$PbHCmeXCOnFVCBSeU7les.TcgtLUx1Dw7av.NEhgUkItshBZ7Au.G',
        //     'remember_token' => '',
        //     'created_at' => null,
        //     'updated_at' => null,
        // ]);
        Management::factory(100)->create();
        Director::factory(100)->create();
    }
}
