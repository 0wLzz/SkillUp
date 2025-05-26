<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    // protected $fillable = ['title', 'subtitle', 'tutor_id', 'category_id', 'students', 'videos', 'thumbnail', 'price', 'description'];
    protected $fillable = [
        'title',
        'subtitle',
        'teacher',
        'students',
        'videos',
        'thumbnail',
        'price',
        'tutor_id',
        'category_id'
    ];

    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
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

    public function similar()
    {
        return Course::inRandomOrder()
            ->limit(4)
            ->get();
    }
}
