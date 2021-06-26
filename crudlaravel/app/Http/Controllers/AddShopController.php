<?php

namespace App\Http\Controllers;
use App\ModelsShops;
use App\User;

use Illuminate\Http\Request;

class AddShopController extends Controller
{
    //
    public function addShops($id){
        $user =User::find($id)->shops;
        return $user;
    }
}
