<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelsShops extends Model
{
    //

    protected $fillable=[
        'id','user_id','name','description','amout','image'
    ];


    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
