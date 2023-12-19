<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentApplication extends Model
{
    use HasFactory;

    protected $table = 'student_application';

    protected $fillable = [
        'uni','full_name','email', 'phone', 'age', 'education', 'occupation', 'interest', 'skills',
    'experience', 'apply_skills','ict_experience', 'how_you_heard'
    ];

}
