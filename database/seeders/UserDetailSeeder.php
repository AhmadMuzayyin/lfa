<?php

namespace Database\Seeders;

use App\Models\UserDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserDetail::insert([
            'user_id' => 2,
            'address' => 'Surabaya',
            'birth_location' => 'Pamekasan',
            'birth_date' => now(),
            'gender' => 'Laki-Laki',
            'telepon' => '0123456789',
            'education' => 'S1 Informatika Unira',
            'course' => 'Cara Menghitung Tanggal Muharram',
            'working' => 'Web Developer',
            'joined' => date('Y'),
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
