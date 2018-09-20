<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lease extends Model
{
    public function user(){
        return $this->hasOne('user', 'id', 'id_user');
    }

    public function tariff(){
        return $this->BelongsTo('tariff', 'id', 'id_tariff');
    }

    public function computer(){
        return $this->BelongsTo('computer', 'id', 'id_computer');
    }
}
