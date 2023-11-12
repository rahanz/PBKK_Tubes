<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
        [
            'user_id' => 'DK110001',
            'user_name' => 'Rayhan M Rizki',
            'role' => 'dokter',
            'email' => 'rayhan@gmail.com',
            'password' => bcrypt('12345678')
        ],
        [
            'user_id' => 'MG000001',
            'user_name' => 'Syakira',
            'role' => 'manager',
            'email' => 'Syakira@gmail.com',
            'password' => bcrypt('12345678')
        ],
        [
            'user_id' => 'AP100001',
            'user_name' => 'Tarisa',
            'role' => 'apoteker',
            'email' => 'tarisa@gmail.com',
            'password' => bcrypt('12345678')
        ]
        ]);
    }
}
