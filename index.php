<?php

declare(strict_types=1);

require_once __DIR__ . '/Semester.php';
require_once __DIR__ . '/Predikat.php';
require_once __DIR__ . '/Mahasiswa.php';
require_once __DIR__ . '/Produk.php';

// Nama: Okta Ramadhani | NIM: 24.24.032095

$semesterAktif = Semester::from('ganjil');
echo "Semester Aktif: {$semesterAktif->label()} ({$semesterAktif->value})\n";
echo "Batas Maksimal SKS: " . Mahasiswa::BATAS_SKS . "\n\n";

$mhs1 = new Mahasiswa('24.24.032095', 'Okta Ramadhani', 'Pendidikan Teknologi Informasi', 3.85);
$mhs2 = new Mahasiswa('24.24.032096', 'Rina Kartika', 'Pendidikan Teknologi Informasi', 3.25);

echo "=== DATA MAHASISWA ===\n";
echo $mhs1->info() . "\n";
echo $mhs2->info() . "\n";
echo "Total Object Mahasiswa Terbuat: " . Mahasiswa::getJumlah() . "\n\n";

echo "=== DATA PRODUK ===\n";
$produk1 = new Produk('PRD-01', 'Buku Pemrograman PHP 8', 65000, 4);
echo $produk1->info() . "\n";

// ------------------------------------------------------------------
// BUKTI ERROR SAAT PROPERTI READONLY DIUBAH (Error: Cannot modify readonly property)
// ------------------------------------------------------------------
// $mhs1->nim = '24.24.999999';
// $produk1->kode = 'PRD-99';
