<?php
// app/Models/Job.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['user_id', 'job_title', 'company_name', 'salary', 'location', 'job_description', 'status'];

    // Define the possible values for the 'status' field
    public const STATUS_SAVED = 'saved';
    public const STATUS_APPLIED = 'applied';
    public const STATUS_INTERVIEW = 'interview';
    public const STATUS_OFFERED = 'offered';
    public const STATUS_REJECTED = 'rejected';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public static function getCountsByStatus()
    {
        return static::select('status', \DB::raw('count(*) as count'))
            ->groupBy('status')
            ->pluck('count', 'status')
            ->toArray();
    }
}
