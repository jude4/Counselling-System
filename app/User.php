<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'id', 'name', 'email', 'password', 'student_id', 'counsellor_id', 'admin_id', 'level', 'facty', 'dept','role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',  'cover_image'
    ];

    public function posts() {
        return $this->hasMany('App\Post');
    }

    public function roles() {
        return $this->belongsToMany('App\Role');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'commentable');
    }

    public function messages()
    {
        return $this->hasMany('App\Message', 'recipient_id');
    }
}
