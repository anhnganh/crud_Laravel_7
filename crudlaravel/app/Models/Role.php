<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class Role extends Model
{
    //
    public function users(){
        return $this->hasMany('App\User');
    }
}
