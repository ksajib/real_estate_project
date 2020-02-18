<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Prophecy\Doubler\NameGenerator;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * table name
     */
    protected $table = 'rs_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role',
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

    public function userProfile(){
        return $this->belongsTo('App\UserProfile');
    }

    // public function setUserNameAttribute($value){
    //     $this->attributes['username'] = str_random($value ['name']);
    // }

    static public function getUsername($name) {
        $username  = str_replace(' ','_', $name);
        $userRows  = User::whereRaw("username REGEXP '^{$username}(-[0-9]*)?$'")->get();
        $countUser = count($userRows) + 1;
        return ($countUser > 1) ? "{$username}-{$countUser}" : $username;
    }

}
