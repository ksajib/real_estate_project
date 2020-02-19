<?php

namespace App\Http\Controllers;

use App\Http\Controllers\frontend\FrontendController;
use App\User;
use App\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Mail\Transport\MailgunTransport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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
            $response = response()->json(['status' => 0, 'text' => ['email' => $validator->errors()->first('email'), 'password' => $validator->errors()->first('password')]]);
        } else {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                if (Auth::check() && Auth::user()->role == 1) {
                    $response = response()->json(['status' => 1, 'text' => 'Login Successfully.']);
                }
            } else {
                $response = response()->json(['status' => 2, 'text' => 'Invalid Email & Password!']);
            }
        }

        return $response;
    }

    public function signup()
    {
        $new = new FrontendController();
        $data = ['country' => $new->country()];
        return view('frontend.register', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|email|unique:rs_users,email',
            'mobile_no' => 'required',
            'address1' => 'required',
            'country' => 'required',
            'password' => 'required|min:6',
        ]);

        $user = new User();
        $user->unique_id = User::getUniqueId();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->username = User::getUsername($request->name);
        $user->password = bcrypt($request->password);
        $user->role = 1;
        $user->save();

        $userProfile = new UserProfile();
        $userProfile->user_id = $user->id;
        $userProfile->mobile_no = $user->mobile_no;
        $userProfile->address1 = $user->address1;
        $userProfile->address2 = $user->address2;
        $userProfile->postcode = $user->postcode;
        $userProfile->country = $user->country;
        $userProfile->status = 1;
        $userProfile->save();

        if (!empty($user) && !empty($userProfile)) :
            return back()->withSuccess(['status' => 1, 'text' => 'Registration has been successfully done.']);
        endif;

        return back()->withSuccess(['status' => 0, 'text' => 'Registration failed.']);
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return back();
    }
}
