# Test Matrix Pertemuan 12

| No | Skenario | Hasil yang Diharapkan | Status | Bukti |
|:---|:---|:---|:---|:---|
| 1 | Buka /enrollments/create | Participant dan course tampil di select | PASS | 03-form.png |
| 2 | Submit participant kosong | Ditolak dengan validation error | PASS | - |
| 3 | Submit course kosong | Ditolak dengan validation error | PASS | - |
| 4 | Alya -> Laravel Dasar | Tersimpan, status registered | PASS | 05-report.png |
| 5 | Alya -> Laravel Dasar lagi | Ditolak sebagai duplicate | PASS | 04-error-duplicate.png |
| 6 | Alya -> PHP Dasar | Boleh tersimpan | PASS | - |
| 7 | Bima -> Laravel Dasar | Boleh tersimpan | PASS | - |
| 8 | Buka /enrollments | Nama participant, course, start date, status benar | PASS | 05-report.png |