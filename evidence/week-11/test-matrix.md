# Test Matrix Pertemuan 11 - Course CRUD Advanced

| No | Skenario | Input Contoh | Hasil yang Diharapkan | Status | Bukti SS |
|:---|:---|:---|:---|:---|:---|
| 1 | Duplicate code saat create | code = WEB-101 | Ditolak, error di field code | PASS | 04-validation-duplicate-code.png |
| 2 | Nama kosong | name = "" | Ditolak, name required | PASS | - |
| 3 | Nama terlalu pendek | name = "AI" | Ditolak, min 3 karakter | PASS | - |
| 4 | Fee negatif | fee = -1000 | Ditolak, min 0 | PASS | - |
| 5 | Fee bukan integer | fee = abc | Ditolak, harus integer | PASS | - |
| 6 | Quota nol | quota = 0 | Ditolak | PASS | - |
| 7 | Quota 501 | quota = 501 | Ditolak, max 500 | PASS | 05-validation-quota-501.png |
| 8 | Boundary quota min | quota = 1 | Diterima | PASS | - |
| 9 | Boundary quota max | quota = 500 | Diterima | PASS | - |
| 10 | Status invalid | status = active | Ditolak | PASS | - |
| 11 | Update dengan code sendiri | Edit nama tanpa ubah code | Berhasil | PASS | 06-update-success.png |
| 12 | Update ke code kursus lain | Ganti code ke milik kursus lain | Ditolak unique | PASS | 04-validation-duplicate-code.png |
| 13 | Delete kursus dummy | Hapus DEL-001 | Data hilang, pesan sukses | PASS | 07-delete-success.png |
