<?php

namespace App\Http\Controllers;
use App\Http\Requests\Category;

use App\Ads;

class HomeController extends Controller
{
    //protégé par login

  
public function welcome(){

    return view('welcome');
}




}
