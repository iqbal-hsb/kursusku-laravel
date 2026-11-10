# AI Usage Log - Pertemuan 10

| Waktu | Masalah / Tujuan | Prompt Singkat | Saran AI yang Diterima / Ditolak | Alasan |
|:---|:---|:---|:---|:---|
| 10/11/2026 | Mengatasi error Class "App\Models\Course" not found | "Kenapa model Course tidak terbaca?" | Menjalankan `composer dump-autoload` dan membuat ulang file model manual | Karena file fisiknya tidak ada di folder app/Models |
| 10/11/2026 | Membuat form create | "Buatkan kode blade untuk form tambah kursus" | Menerima kode form dengan @csrf dan @error | Kode sesuai dengan panduan PDF |