<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Administrator',
                'email' => 'admin@example.com',
                'password' => Hash::make('superadmin21'),
                'faculty_id' => 2,
                'department_id' => 20,
                'role' => 'admin',
            ],
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => Hash::make('john1234'),
                'nim' => '123456789101112',
                'faculty_id' => 2,
                'department_id' => 20,
                'role' => 'user',
            ],
            [
                'name' => 'Alexandro xenov',
                'email' => 'xenov@example.com',
                'password' => Hash::make('xenov12345'),
                'nim' => '123456789101112',
                'faculty_id' => 2,
                'department_id' => 20,
                'role' => 'user',
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'jane@example.com',
                'password' => Hash::make('jane1234'),
                'nim' => '123456789101112',
                'faculty_id' => 2,
                'department_id' => 20,
                'role' => 'user',
            ],
            [
                'name' => 'Franklin Doe',
                'email' => 'yasser@example.com',
                'password' => Hash::make('yasser123'),
                'nim' => '123456789101112',
                'faculty_id' => 2,
                'department_id' => 20,
                'role' => 'user',
            ],
            [
                'name' => 'Zynn Madstch',
                'email' => 'zyn@example.com',
                'nim' => '123456789101112',
                'password' => Hash::make('zynxx123'),
                'nim' => '210211060100',
                'faculty_id' => 2,
                'department_id' => 20,
                'role' => 'user',
            ],
            [
                'name' => 'Alvred Schyan',
                'email' => 'alfred@example.com',
                'password' => Hash::make('alvred1234'),
                'nim' => '123456789101112',
                'faculty_id' => 2,
                'department_id' => 20,
                'role' => 'user',
            ],
            [
                'name' => 'Rhyuu Xayaz',
                'email' => 'rhyuu@example.com',
                'password' => Hash::make('rhyuu123'),
                'nim' => '123456789101112',
                'faculty_id' => 2,
                'department_id' => 20,
                'role' => 'user',
            ],
            [
                'name' => 'Jammy Smith',
                'email' => 'jammy@example.com',
                'password' => Hash::make('jammy123'),
                'nim' => '123456789101112',
                'faculty_id' => 2,
                'department_id' => 20,
                'role' => 'user',
            ]
        ];

        foreach($userData as $key => $val) {
            User::create($val);
        }
    }
}
