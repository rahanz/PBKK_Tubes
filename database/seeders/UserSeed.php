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
            'user_name' => 'Rayhan M Rizki',
            'email' => 'rayhan@gmail.com',
            'password' => bcrypt('12345678'),
            'foto_profil' => 'AdminLTE-3/dist/img/Rayhan M Rizki.jpg'
        ],
        [
            'user_name' => 'Syakira',
            'email' => 'Syakira@gmail.com',
            'password' => bcrypt('12345678'),
            'foto_profil' => ''
        ],
        [
            'user_name' => 'Tarisa',
            'email' => 'tarisa@gmail.com',
            'password' => bcrypt('12345678'),
            'foto_profil' => ''
        ]
        ]);
    }
}
