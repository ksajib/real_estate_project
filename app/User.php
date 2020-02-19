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

    static public function getUsername($name) {
        $username  = str_replace(' ','_', $name);
        $userRows  = User::whereRaw("username REGEXP '^{$username}(-[0-9]*)?$'")->get();
        $countUser = count($userRows) + date('si');
        return (count($userRows) > 1) ? "{$username}_{$countUser}" : $username;
    }

    static public function getUniqueId() {
        $uniqid = uniqid();
        $userRows  = User::whereRaw("unique_id REGEXP '^{$uniqid}(-[0-9]*)?$'")->get();
        $status = false;
        if(count($userRows) > 0 || $status == true) :
            $uniqid = uniqid();
            $userRows  = User::whereRaw("unique_id REGEXP '^{$uniqid}(-[0-9]*)?$'")->get();
            if(count($userRows) > 0 ):
                $status == true;
                User::getUniqueId();
            else:
                $status == false;
            endif;
        endif;
        return $uniqid;
    }

}
