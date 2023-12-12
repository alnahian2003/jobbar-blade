<?php

namespace App\Enums;

enum EmploymentType: string
{
    case FULL_TIME = 'full_time';
    case PART_TIME = 'part_time';
    case CONTRACT = 'contract';
    case FREELANCE = 'freelance';
    case INTERNSHIP = 'internship';
    case REMOTE = 'remote';
    case OTHER = 'other';

    public function getLabel(): string
    {
        return match ($this) {
            self::FULL_TIME => 'Full Time',
            self::PART_TIME => 'Part Time',
            self::CONTRACT => 'Contract',
            self::FREELANCE => 'Freelance',
            self::INTERNSHIP => 'Internship',
            self::REMOTE => 'Remote',
            self::OTHER => 'Other',
        };
    }
}
