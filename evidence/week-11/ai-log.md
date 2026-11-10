# Log Penggunaan AI - Pertemuan 11

| Waktu | Masalah / Tujuan | Prompt Singkat | Saran AI yang Diterima / Ditolak | Alasan |
|:---|:---|:---|:---|:---|
| 11/11/2026 | Membuat Form Request | "Buatkan StoreCourseRequest dan UpdateCourseRequest" | Menerima kode Form Request | Sesuai dengan panduan PDF dan memisahkan validasi dari Controller |
| 11/11/2026 | Error 403 Forbidden | "Kenapa form edit error 403?" | Menerima saran mengubah `authorize()` menjadi `return true;` | Karena Form Request memblokir request jika authorize false |
| 11/11/2026 | Membuat tombol Hapus | "Buatkan form delete dengan konfirmasi" | Menerima kode form dengan `@method('DELETE')` dan `onsubmit="return confirm()"` | Agar aman dan sesuai standar Laravel |
