<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Akun Pertama (Admin/Organizer)
        User::create([
            'name' => 'Admin Rintisar',
            'email' => 'admin@rintisar.com',
            'password' => Hash::make('password123'),
        ]);

        // Akun Kedua (Volunteer/User Umum)
        User::create([
            'name' => 'Opank Volunteer',
            'email' => 'opank@developer.com',
            'password' => Hash::make('password123'),
        ]);


        $this->call([
            EventSeeder::class,
        ]);
    }
}