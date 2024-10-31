<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    // Specify the table if it doesn't follow Laravel's naming convention
    protected $table = 'resumes';

    // Specify the fillable attributes
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'about_me',
        'skills',
        'education',
        'work_experience',
    ];
}
