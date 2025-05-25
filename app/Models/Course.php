<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class Course extends Model
{
    // protected $fillable = ['title', 'subtitle', 'tutor_id', 'category_id', 'students', 'videos', 'thumbnail', 'price', 'description'];
    protected $fillable = [
        'title',
        'subtitle',
        'teacher',
        'students',
        'videos',
        'thumbnail',
        'price',
        'tutor_id'
    ];

    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function tutor()
    {
        //return $this->hasOne(Category::class);
        return $this->belongsTo(User::class, 'tutor_id');
    }

    public function benefits()
    {
        return $this->hasMany(CourseBenefit::class);
    }

    public function curriculums()
    {
        return $this->hasMany(Curriculum::class);
    }

    public function purchases()
    {
        return $this->hasMany(CoursePurchase::class);
    }
}
