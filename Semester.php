<?php

declare(strict_types=1);

enum Semester: string
{
    case Ganjil = 'ganjil';
    case Genap = 'genap';

    public function label(): string
    {
        return match ($this) {
            self::Ganjil => 'Semester Ganjil',
            self::Genap => 'Semester Genap',
        };
    }
}
