<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course; // Pastikan model Course sudah ada
use Carbon\Carbon;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        // Data dummy kursus
        $courses = [
            [
                'kode' => 'WEB-01',
                'nama' => 'Dasar HTML & CSS',
                'biaya' => 150000,
                'kuota' => 20,
                'mulai' => Carbon::now()->addDays(7)->format('Y-m-d'),
                'status' => 'Buka',
            ],
            [
                'kode' => 'WEB-02',
                'nama' => 'JavaScript Fundamental',
                'biaya' => 250000,
                'kuota' => 15,
                'mulai' => Carbon::now()->addDays(14)->format('Y-m-d'),
                'status' => 'Buka',
            ],
            [
                'kode' => 'WEB-03',
                'nama' => 'Laravel untuk Pemula',
                'biaya' => 350000,
                'kuota' => 10,
                'mulai' => Carbon::now()->addDays(21)->format('Y-m-d'),
                'status' => 'Tutup',
            ],
            [
                'kode' => 'UIX-01',
                'nama' => 'Desain UI/UX dengan Figma',
                'biaya' => 200000,
                'kuota' => 25,
                'mulai' => Carbon::now()->addDays(3)->format('Y-m-d'),
                'status' => 'Buka',
            ],
        ];

        // Masukkan data ke database
        foreach ($courses as $course) {
            Course::create($course);
        }
    }
}