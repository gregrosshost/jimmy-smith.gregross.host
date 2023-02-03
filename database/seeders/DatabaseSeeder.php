<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Entry;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
           'name' => 'admin',
           'email' => 'admin@admin.com',
           'password' => '$2y$10$AbR20Jik5xu9jfzRxTXcg.7Fv89ibKr.kNT9sv8vG7F3G1CBPUbOe',
           'remember_token' => Str::random(10),
        ]);

    }
}
