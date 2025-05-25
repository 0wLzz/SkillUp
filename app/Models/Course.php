<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Course extends Model
{
    //  
    protected $fillable = ['title', 'subtitle', 'tutor_id', 'category_id', 'students', 'videos', 'thumbnail', 'price', 'description'];

    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function tutor()
    {
        return $this->hasOne(Category::class);
    }

    public function benefits()
    {
        return $this->hasMany(CourseBenefit::class);
    }

    public function curriculums()
    {
        return $this->hasMany(Curriculum::class);
    }
}
