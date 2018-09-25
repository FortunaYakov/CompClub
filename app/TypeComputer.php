<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeComputer extends Model
{
    public function computer(){
        return $this->hasMany(Computer::class);
    }
}
