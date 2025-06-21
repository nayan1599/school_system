<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// database/seeders/UserSeeder.php
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin',  
            'email' => 'admin@school.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'phone' => '01711111111',
            'gender' => 'male',
            'dob' => '1990-01-01',
            'address' => 'Dhaka',
            'status' => true,
        ]);

        User::create([
            'name' => 'Mr. Karim',
            'email' => 'teacher@school.com',
            'password' => Hash::make('teacher123'),
            'role' => 'teacher',
            'phone' => '01722222222',
            'gender' => 'male',
            'dob' => '1985-06-01',
            'address' => 'Chittagong',
            'status' => true,
        ]);

        User::create([
            'name' => 'Student A',
            'email' => 'student@school.com',
            'password' => Hash::make('student123'),
            'role' => 'student',
            'phone' => '01733333333',
            'gender' => 'female',
            'dob' => '2008-08-10',
            'address' => 'Sylhet',
            'status' => true,
        ]);
    }
}
