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
        \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Admin Lutfi',
            'email' => 'lutfi@fic11.com',
            'password' => Hash::make('123'),
            // 'roles' => 'ADMIN',
            // 'phone' => '081234567890',
        ]);

        $this->call([
            ProductSeeder::class,
        ]);
    }
}
