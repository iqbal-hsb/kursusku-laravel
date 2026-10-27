# Test Matrix - Week 09
**Nama:** [Tulis Nama Kamu]
**NIM:** [Tulis NIM Kamu]

| No | Skenario Uji | Hasil yang Diharapkan | Status |
|:---|:---|:---|:---:|
| 1 | Buka Halaman Beranda (`/`) | Layout, Navbar, dan Gambar Ilustrasi tampil. | ✅ PASS |
| 2 | Kecilkan ukuran browser (Mobile View) | Navbar berubah menjadi tombol *hamburger* (collapse). | ✅ PASS |
| 3 | Buka Halaman Pendaftaran (`/pendaftaran`) | Form tampil rapi di tengah dengan bayangan (*shadow*). | ✅ PASS |
| 4 | Pilih Kursus di Dropdown | Kotak notifikasi berubah hijau dan menampilkan sisa kursi. | ✅ PASS |
| 5 | Kosongkan Form & Klik Kirim | Muncul peringatan merah (validasi required) di bawah input. | ✅ PASS |
| 6 | Isi email dengan format salah (misal: "abc") | Muncul peringatan validasi email. | ✅ PASS |
| 7 | Isi form dengan data valid & Kirim | Halaman *refresh*, muncul *alert* hijau "Form lolos validasi". | ✅ PASS |
| 8 | Cek DevTools Console (F12) | Tidak ada tulisan error merah yang fatal. | ✅ PASS |
| 9 | Cek DevTools Network (F12) | Request `/courses/1/availability` sukses (Status 200, Response JSON).| ✅ PASS |
| 10 | Cek Logo di Tab Browser | Logo KursusKu muncul (tidak ada error 404 favicon). | ✅ PASS |

**Catatan Tambahan:**
- *[Tulis jika ada kendala yang kamu temui saat pengujian, misalnya: "Sempat error 404 karena Vite belum di-build, tapi sudah teratasi"]*