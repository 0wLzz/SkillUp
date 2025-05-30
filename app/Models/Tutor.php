<?php

namespace App\Models;

use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Tutor extends Authenticatable
{
    use SoftDeletes, HasFactory, Notifiable, CanResetPassword;

    protected $guarded = ['id'];

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}
