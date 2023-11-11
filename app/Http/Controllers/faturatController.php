<?php

namespace App\Http\Controllers;
use App\Models\Faturat;


use Illuminate\Http\Request;

class faturatController extends Controller
{
    function getFaturat(){
        $faturat = Faturat::all();
        return response()->json(['faturat' => $faturat]);
    }


}
