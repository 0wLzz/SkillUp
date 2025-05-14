<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    //protected $fillable = ['title', 'subtitle', 'teacher', 'students', 'videos', 'thumbnail'];
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
    public function purchases()
    {
        return $this->hasMany(CoursePurchase::class);
    }

}
