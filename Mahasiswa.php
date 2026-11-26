<?php

declare(strict_types=1);

class Mahasiswa
{
    public const int BATAS_SKS = 24;

    private static int $jumlahObject = 0;

    public function __construct(
        public readonly string $nim,
        public string $nama,
        public string $prodi = 'Pendidikan Teknologi Informasi',
        public float $ipk = 0.0,
    ) {
        self::$jumlahObject++;
    }

    public static function getJumlah(): int
    {
        return self::$jumlahObject;
    }

    public function predikat(): Predikat
    {
        return Predikat::dariIpk($this->ipk);
    }

    public function info(): string
    {
        return "{$this->nim} - {$this->nama} ({$this->prodi}) | IPK: "
            . number_format($this->ipk, 2)
            . " | Predikat: {$this->predikat()->label()}"
            . " | Batas SKS: " . self::BATAS_SKS;
    }
}
