<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    protected $table = 'curriculums';
    protected $guarded = ['id'];

    public function course()
    {
        return $this->hasOne(Course::class);
    }

    public function material_video()
    {
        return $this->hasMany(MaterialVideo::class);
    }

    public function material_worksheet()
    {
        return $this->hasMany(MaterialWorksheet::class);
    }

    public function getAllMaterials()
    {
        return $this->material_video->concat($this->material_worksheet)->sortBy('created_at');
    }
}
