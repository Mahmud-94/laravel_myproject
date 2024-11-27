<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // \App\Models\Expert::factory(50)->create();

        \App\Models\Admin::create([
            'name' => 'mahmud',
            'email' => 'mahmud@gmail.com',
            'password' => Hash::make('mahmud123'),
        ]);


        \App\Models\Agent::create([
            'name' => 'HASSAN',
            'email' => 'hassan@gmail.com',
            'password' => Hash::make('hassan123'),
              'expert_id'=> '1'
        ]);
    }
}
