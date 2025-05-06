<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Tutor extends Authenticatable
{
    use SoftDeletes, HasFactory, Notifiable;

    protected $guarded = 'admin';

    protected $fillable = [
        'name',
        'email',
        'password',
        'occupation',
        'image'
    ];
}
