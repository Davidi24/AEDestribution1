<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    function changePassword(Request $request)
    {
        $user = Session::get('user');
        $newPassword = $request->input('password');

        if ($user) {
            $user->password = $newPassword;
            DB::table('NexusServer.dbo.User')
                ->where('id', $user->id)
                ->update(['password' => $newPassword]);

            return response()->json(['message' => 'Password changed successfully']);
        } else {
            return response()->json(['message' => 'Password did not changed successfully']);
        }
    }


    function CheckIfFirtsLogin()
    {
        $user = Session::get('user');

if($user){

        if ($user->first_login === "0") {
            DB::table('NexusServer.dbo.User')
            ->where('id', $user->id)
            ->update(['first_login' => "1"]);

            return response()->json(['message' => "0"]);

        } else {
            return response()->json(['message' => "1"]);
        }
    }
    else{
        return response()->json(['message' => "error"]);
    }
    }
}
