<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $table = 'rs_user_profile';

    public function user(){
        return $this->hasOne('App\User');
    }
}
