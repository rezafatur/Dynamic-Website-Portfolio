<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResumeSummary extends Model
{
    use HasFactory;

    protected $table = 'resume_summarys';

    protected $fillable = [
        'name',
        'description'
    ];
}
