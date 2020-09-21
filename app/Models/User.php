<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'phone',
        'email',
        'birthday',
        'address',
        'gender',
        'university',
        'password',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tasks(){
        return $this->hasMany(Task::class);
    }

    public function roles(){
        return $this->belongsToMany(Role::class,'role_user','user_id','role_id')->withTimestamps();;
    }

    public function courses(){
        return $this->belongsToMany(Course::class,'course_user','user_id','course_id')->withTimestamps();;
    }

    public function subjects(){
        return $this->belongsToMany(Subject::class,'user_subject','user_id','subject_id')->withTimestamps();;
    }
}
