<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $courses = [
            ['code' => 'WEB-101', 'name' => 'Web Dasar', 'description' => 'Belajar HTML, CSS, dan dasar web.', 'fee' => 300000, 'quota' => 25, 'start_date' => '2026-12-01', 'status' => 'open'],
            ['code' => 'PHP-101', 'name' => 'PHP Fundamental', 'description' => 'Belajar logika PHP dan form.', 'fee' => 400000, 'quota' => 25, 'start_date' => '2026-12-05', 'status' => 'open'],
            ['code' => 'LRV-101', 'name' => 'Laravel Dasar', 'description' => 'Belajar route, controller, dan Blade.', 'fee' => 500000, 'quota' => 20, 'start_date' => '2026-12-10', 'status' => 'open'],
            ['code' => 'SQL-101', 'name' => 'MySQL Dasar', 'description' => 'Belajar query database relasional.', 'fee' => 350000, 'quota' => 30, 'start_date' => '2026-12-12', 'status' => 'open'],
            ['code' => 'UI-101', 'name' => 'Bootstrap UI', 'description' => 'Belajar layout responsif dengan Bootstrap.', 'fee' => 300000, 'quota' => 25, 'start_date' => '2026-12-15', 'status' => 'draft'],
            ['code' => 'JS-101', 'name' => 'JavaScript Dasar', 'description' => 'Belajar DOM dan manipulasi elemen.', 'fee' => 400000, 'quota' => 20, 'start_date' => '2026-12-18', 'status' => 'open'],
            ['code' => 'AJAX-101', 'name' => 'jQuery dan Ajax', 'description' => 'Belajar request asynchronous.', 'fee' => 450000, 'quota' => 20, 'start_date' => '2026-12-20', 'status' => 'draft'],
            ['code' => 'API-101', 'name' => 'REST API Dasar', 'description' => 'Belajar membuat dan konsumsi API.', 'fee' => 550000, 'quota' => 18, 'start_date' => '2026-12-22', 'status' => 'closed'],
            ['code' => 'PY-101', 'name' => 'Python Dasar', 'description' => 'Belajar pemrograman Python dari nol.', 'fee' => 450000, 'quota' => 30, 'start_date' => '2027-01-05', 'status' => 'open'],
            ['code' => 'ML-101', 'name' => 'Machine Learning', 'description' => 'Pengantar dasar Machine Learning.', 'fee' => 750000, 'quota' => 15, 'start_date' => '2027-01-10', 'status' => 'closed'],
            ['code' => 'SEC-101', 'name' => 'Cyber Security', 'description' => 'Dasar-dasar keamanan siber.', 'fee' => 600000, 'quota' => 20, 'start_date' => '2027-01-15', 'status' => 'open'],
            ['code' => 'MOB-101', 'name' => 'Mobile App', 'description' => 'Belajar membuat aplikasi mobile.', 'fee' => 650000, 'quota' => 25, 'start_date' => '2027-01-20', 'status' => 'draft'],
        ];

        foreach ($courses as $course) {
            // updateOrCreate mencegah error duplikat jika seeder dijalankan 2x
            Course::updateOrCreate(['code' => $course['code']], $course);
        }
    }
}