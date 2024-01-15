<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function loginHandler(Request $request)
    {   
        $users = ['Antigoni'];

        $validator = Validator::make( $request->all(), [
            'username' => 'required|string|max:255',
            ]);
        
        if ($validator->fails()) 
        {
            return response()->json(['error' => $validator->errors()->all()]);
        }
        if(!in_array($request->username, $users))
        {
            return response()->json(['error' => 'The username you have provided is invalid.']);
        }

        session(['username' => $request->username]);
        return response()->json(['success' => 'You have logged in']);
    }

    public function logoutHandler()
    {
        session()->forget('username');
        return redirect()->route('login.page');
    }
}
