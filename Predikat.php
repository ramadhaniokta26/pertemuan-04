<?php

declare(strict_types=1);

enum Predikat: string
{
    case Cumlaude = 'cumlaude';
    case SangatMemuaskan = 'sangat_memuaskan';
    case Memuaskan = 'memuaskan';

    public function label(): string
    {
        return match ($this) {
            self::Cumlaude => 'Cumlaude',
            self::SangatMemuaskan => 'Sangat Memuaskan',
            self::Memuaskan => 'Memuaskan',
        };
    }

    public static function dariIpk(float $ipk): self
    {
        if ($ipk >= 3.51) {
            return self::Cumlaude;
        }

        if ($ipk >= 3.01) {
            return self::SangatMemuaskan;
        }

        return self::Memuaskan;
    }
}
