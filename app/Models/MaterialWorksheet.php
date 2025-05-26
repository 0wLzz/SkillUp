<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialWorksheet extends Model
{
    use HasFactory;
    protected $table = 'material_worksheets';
    protected $guarded = ['id'];

    public function curriculum()
    {
        return $this->belongsTo(Curriculum::class);
    }
}
