<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    public function run(): void
{
    Event::create([
        'title' => 'Bakti Sosial Surabaya',
        'description' => 'Pembagian sembako di area Gubeng.',
        'event_date' => now()->addDays(7),
    ]);

    Event::create([
        'title' => 'Workshop Coding Rumah Developer',
        'description' => 'Belajar Laravel Dasar bersama komunitas.',
        'event_date' => now()->addDays(14),
    ]);
}
}
