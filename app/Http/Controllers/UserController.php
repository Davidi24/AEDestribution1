<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    function changePassword(Request $request) {
        $user = Auth::user();

        $newPassword = $request->input('password');

      if($user){
        $user->password = $newPassword;
        User::where('id', $user->id)->update(['password' => $newPassword]);

        return response()->json(['message' => 'Password changed successfully']);
      }
      else{
        return response()->json(['message' => 'Password did not changed successfully']);
      }
    }


    function getUsers(){

    }

}
