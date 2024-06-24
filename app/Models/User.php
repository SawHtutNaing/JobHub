<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function ProfileType()
    {
        // $user = Auth::user();
        return $this->hasOne(ProfileType::class);
        // return $user->profile_type;
    }

    public function personalDetails()
    {
        return $this->hasOne(PersonalProfile::class);
    }


    public function AppliedJOb()
    {
        return $this->hasMany(JobApplyDetails::class);
    }

    public function PostedJobs()
    {
        return $this->hasMany(Job::class);
    }

    public function relatedJob()
    {
        if ($this->profile_type == 'company') {
            return $this->PostedJobs->count();
        }
        return $this->AppliedJOb->count();
    }


    public function relatedJobAccept()
    {
        if ($this->profile_type == 'company') {
            return $this->postedJobs->map(function ($job) {
                // dd($job->);
                return $job->getAppliedDetails->where('accept', true)->count();
            })->sum();
        }
        return $this->AppliedJOb->where('accept', true)->count();
    }
}
