<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=> 'Admin',
            'email'=> 'admin@admin.com',
            'password'=> bcrypt(12345678),
            'image'=> 'defult.png',
            'type'=> 'Admin',

        ]);
        User::create([
            'name'=> 'User',
            'email'=> 'user@staff.com',
            'password'=> bcrypt(12345678),
            'image'=> 'defult.png',
           

        ]);
    }
}
