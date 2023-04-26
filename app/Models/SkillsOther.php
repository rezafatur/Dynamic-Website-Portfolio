<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkillsOther extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo',
        'title',
        'level'
    ];
}
