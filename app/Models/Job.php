<?php

namespace App\Models;

use App\Enums\EmploymentType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'employment_type', 'company_name', 'role',
        'apply_url', 'company_logo', 'description', 'salary',
    ];


    protected $casts = [
        'employment_type' => EmploymentType::class
    ];
}
