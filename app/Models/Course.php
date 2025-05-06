<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable = ['title', 'subtitle', 'tutor_id', 'category_id', 'students', 'videos', 'thumbnail'];

    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function tutor()
    {
        return $this->hasOne(Category::class);
    }
}
