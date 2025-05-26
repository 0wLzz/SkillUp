<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curriculum extends Model
{
    use HasFactory;
    protected $table = 'curriculums';
    protected $guarded = ['id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function tutor()
    {
        return $this->belongsTo(Tutor::class);
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
