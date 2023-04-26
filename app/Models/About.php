<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $table = 'about';

    protected $fillable = [
        'profile',
        'cv',
        'fullname',
        'age',
        'degree',
        'interest',
        'phone',
        'email',
        'freelance',
        'imagefrom',
        'from',
        'imagecurrently',
        'currently'
    ];
}
