<?php

namespace Database\Seeders;

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $user = User::create([
            'name' => 'admin',
            'email'=> 'admin@admin.com',
            'password' => Hash::make('password'),
            'role' => 'admin'
        ]);
        
    }
}
