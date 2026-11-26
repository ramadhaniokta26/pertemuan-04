# Lab Sheet Pertemuan 4: Static, Konstanta, dan Fitur OOP PHP 8

- **Nama:** Okta Ramadhani
- **NIM:** 24.24.032095

## Catatan Perbedaan Jumlah Baris (Sebelum vs Sesudah Refactor)

| Komponen | Sebelum Refactor (Pertemuan 2) | Sesudah Refactor (Pertemuan 4) | Keterangan |
| :--- | :--- | :--- | :--- |
| `Mahasiswa.php` | ~38 baris | ~34 baris | Lebih ringkas berkat *constructor property promotion* (`public readonly string $nim`, `public string $nama`, dll.), meski ada tambahan `BATAS_SKS` dan counter `static` |
| `Produk.php` | ~24 baris | ~21 baris | Deklarasi properti dan assignment di `__construct()` digabung menjadi satu baris per properti |
| `Semester.php` & `Predikat.php` | Belum ada | ~24 & ~42 baris | File baru untuk `enum Semester` dan `enum Predikat` beserta method `label()` |

