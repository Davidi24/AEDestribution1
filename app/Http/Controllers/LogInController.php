<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogInController extends Controller
{
    function loginview(){
        return view('LogIn.login');
    }

    function checkUser(Request $request) {
        $email = $request->input('email'); // assuming email comes from the request
        $password = $request->input('password');

        $user = DB::table('NexusServer.dbo.User')->where('username', $email)->first();

        if ($user) {
            if ($password == $user->password) {
                Session::put('user', $user);
                return response()->json(['message' => 'Login successful']);
            } else {
                return response()->json(['message' => 'Incorrect password']);
            }
        } else {
            return response()->json(['message' => 'Username does not exist']);
        }
    }

}

