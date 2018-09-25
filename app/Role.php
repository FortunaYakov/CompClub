<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function user(){
        return $this->hasMany('user', 'id_user', 'id');
    }

    public static function isAdmin()
    {
        if($user = auth()->user())
        {
//            if($user->role->role === 'admin')
                return true;
        }
        else
        {
            return false;
        }
    }
    public static function isManager()
    {
        if($user = auth()->user())
        {
//            if($user->role->role === 'manager')
                return true;
        }
        else
        {
            return false;
        }
    }
    public static function isClient()
    {
        if($user = auth()->user())
        {
//            if($user->role->role === 'client')
                return true;
        }
        else
        {
            return false;
        }
    }
}
