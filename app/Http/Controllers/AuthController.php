<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function postLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
             'password' => 'required',
         ]);

        if ($validator->fails()) {
            $response = response()->json(['status' => 0, 'text' => [ 'email' => $validator->errors()->first('email'), 'password' => $validator->errors()->first('password')] ]);
        }else{
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                if (Auth::check() && Auth::user()->role == 1){
                    $response = response()->json(['status' => 1, 'text' => 'Login Successfully.']);
                }
            } else {
                $response = response()->json(['status' => 2, 'text' => 'Invalid Email & Password!']);
            }
        }

        return $response;
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return back();
    }
}
