<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lease extends Model
{
    public function user(){
        return $this->hasOne('App\User', 'id', 'id_user');
    }

    public function tariff(){
        return $this->BelongsTo('App\Tariff', 'id_tariff', 'id');
    }

    public function computer(){
        return $this->BelongsTo('App\Computer', 'id_computer', 'id');
    }
}
