<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    //
    public function index(){
         $category = category::all();
         return view('Backend.Category',['category' => $category]);

    }
    public function create(Request $request){

        $create = new category;
        $create->category = $request->Category;
        $create->save();

        return redirect()->back();

    }

    public function delete($id){

        $user = category::find($id)->delete();
        return redirect()->back();


    }
}
