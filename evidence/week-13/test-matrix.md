# Test Matrix Pertemuan 13

| No | Skenario | Input | Expected | Actual | Status |
|:---|:---|:---|:---|:---|:---|
| 1 | 0 hasil | `q=xyzabc` | Empty state tampil | Sesuai | PASS |
| 2 | 1 hasil | `q=Bootstrap` | 1 record tampil | Sesuai | PASS |
| 3 | >10 hasil | Buka `/courses` | Max 10 + pagination | Sesuai | PASS |
| 4 | Keyword spasi | `q=Web Dasar` | Keyword terbaca | Sesuai | PASS |
| 5 | Filter + page 2 | `status=open&page=2` | Query state tetap | Sesuai | PASS |