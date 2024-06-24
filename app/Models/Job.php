<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'qualifications' => 'array',
        'subCategories' => 'array'
    ];



    public  function owner()
    {

        // dd($job);

        // dd($this->belongsTo(User::class, 'user_id'));
        return $this->belongsTo(User::class, 'user_id');
    }

    public static function  JobList()
    {
        return Job::all();
    }

    public function getAppliedDetails()
    {
        return $this->hasMany(JobApplyDetails::class);
    }
    public function getAppliedUsers()
    {
        return $this->hasManyThrough(User::class, JobApplyDetails::class, 'job_id', 'id', 'id', 'user_id');
    }
}
