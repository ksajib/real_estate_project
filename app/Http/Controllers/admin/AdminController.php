<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\UserProfile;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view('admin.dashboard');
    }

    public function edit_profile(){
        $data = ['user' => User::find(Auth::user()->id), 'user_profile' => UserProfile::find(Auth::user()->id) ];
        return view('admin.edit_profile', compact('data'));
        // return view('admin.edit_profile')
        // ->with('rs_users', User::find(Auth::user()->id))
        // ->with('rs_user_profile', UserProfile::find(Auth::user()->id));
    }
}
