<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Computer extends Model
{
    public function typecomputer(){
        return $this->BelongsTo('App\TypeComputer', 'id_type', 'id');
    }

    public function staff(){
        return $this->BelongsTo('App\Staff', 'id_staff', 'id');
    }
}
