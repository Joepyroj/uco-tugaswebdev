<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['first_name', 'last_name', 'age', 'email', 'password', 'cv_path', 'role'];

    protected $hidden = ['password', 'remember_token'];

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
