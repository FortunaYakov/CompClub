<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tariff extends Model
{
    public function lease(){
        return $this->hasMany('lease', 'id_tariff', 'id');
    }
}
