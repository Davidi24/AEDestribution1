<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{
    function indexView(){
     return view('index');
    }
    function homeView(){
        return view('home');
       }
}
