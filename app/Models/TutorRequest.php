<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TutorRequest extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'portfolio_path',
        'status'
    ];
}
