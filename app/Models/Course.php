<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_course',
        'name',
        'description',
        'date_start',
        'date_end',
        'active',
    ];

}
