<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['user_id', 'job_title', 'company_name', 'salary', 'location', 'job_description'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
