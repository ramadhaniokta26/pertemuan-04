<?php

declare(strict_types=1);

class Produk
{
    public function __construct(
        public readonly string $kode,
        public string $nama,
        public int $harga,
        public int $stok,
    ) {
    }

    public function totalNilai(): int
    {
        return $this->harga * $this->stok;
    }

    public function info(): string
    {
        return "[{$this->kode}] {$this->nama} | Harga: Rp{$this->harga} | Stok: {$this->stok} | Total Nilai: {$this->totalNilai()}";
    }
}
