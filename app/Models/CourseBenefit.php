<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseBenefit extends Model
{
    protected $table = "course_benefit";

    protected $fillable = ['benefit'];

    public function course()
    {
        return $this->hasOne(Course::class);
    }
}
