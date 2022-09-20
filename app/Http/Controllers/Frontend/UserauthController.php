<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserauthController extends Controller
{
    // user login
    public function Create(){
        return view('FrontEnd.user.CreateUser');
    }

}
