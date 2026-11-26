<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CourseSeeder::class,
        ]);

        User::updateOrCreate(
            ['email' => 'admin@kursusku.test'],
            [
                'name' => 'Administrator',
                'password' => bcrypt('password123'),
                'role' => 'admin'
            ]
        );
    }
}