<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
class AdminauthController extends Controller
{
     // user login
    public function login(){
        return view('Backend.login');
    }
    public function loginadmin(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/Admin/Category');
        }
        return redirect('/Admin/Category');
    }
}
