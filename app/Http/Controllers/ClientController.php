<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class ClientController extends Controller
{
function getClients(){
  $clinets =   DB::table('NexusServer.dbo.Client');
  return response()->json(['message' => $clinets]);

}
}
