<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable = ['title', 'subtitle', 'teacher', 'students', 'videos', 'thumbnail'];

}
