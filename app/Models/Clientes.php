<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    //nuevo commit
    public function facturas() {
        return $this->hasMany('App\Models\facturas');
    }
}
