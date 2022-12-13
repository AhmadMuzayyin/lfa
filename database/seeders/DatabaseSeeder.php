<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

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
            'fullname' => "Ahmad Muzayyin",
            'username' => 'ahmad15',
            'email' => 'admin@lfa.test',
            'email_verified_at' => now(),
            'password' => bcrypt('12345'),
            'image' => 'default.png',
            'status' => true,
            'type' => true,
            'role' => true,
            'remember_token' => Str::random(10),
        ]);
        \App\Models\User::factory(50)->create();
        $this->call([
            SettingWebSeeder::class,
            UserDetailSeeder::class
        ]);
    }
}
