<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    function CreateTableView() {
        $renderedView = View::make("Pages.cratetable")->render();
        return response()->json(["message" => $renderedView]);
    }


}
