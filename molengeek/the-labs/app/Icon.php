<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    public function services(){
        return $this->hasMany(Service::class);
    }
}
