<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    public function computer(){
        return $this->hasMany('computer', 'id_staff', 'id');
    }
}
