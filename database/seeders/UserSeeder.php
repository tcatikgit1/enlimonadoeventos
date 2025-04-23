<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        User::create([
        'name' => 'Admin2',
        'email' => 'admin2@correo.com',
        'password' => bcrypt('1234'),
    ]);

    }
}
