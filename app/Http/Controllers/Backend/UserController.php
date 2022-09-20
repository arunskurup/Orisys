<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
class UserController extends Controller
{
    //
    public function index(){
       $user = User::all();
       return view('Backend.User',['user' => $user]);
    }
    // Delete user
    public function delete($id){

        $user = User::find($id)->delete();
        return redirect()->back();


    }
}
