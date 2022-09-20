<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\subcategory;
class SubcategoryController extends Controller
{
    //
     public function index(){
        $category = category::all();
        $subcategory = subcategory::all();
        // dd($subcategory);
        return view('Backend.Subcategory',['category' => $category,'subcategory' => $subcategory]);

   }
   public function create(Request $request){

       $create = new subcategory;
       $create->category_id =  $request->category;
       $create->subcategory =  $request->Subcategory;
       $create->save();

       return redirect()->back();

   }

   public function delete($id){

       $user = subcategory::find($id)->delete();
       return redirect()->back();


   }
   public function find($id){

    $user = subcategory::where('category_id',$id)->get();
    return $user;


}
}
