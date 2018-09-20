<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Computer extends Model
{
    public function computer(){
        return $this->hasMany('computer', 'id_computer', 'id');
    }

    public function staff(){
        return $this->BelongsTo('staff', 'id', 'id_staff');
    }
}
