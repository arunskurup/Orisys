<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\category;
use App\Models\subcategory;
use Config;
use DB;
class ProductController extends Controller
{
    //
    public function index(){
        $Product = Products::all();
        return view('Backend.Product',['Product' => $Product]);

   }
   public function create(){
     $category = category::all();
     $subcategory = subcategory::all();
    return view('Backend.Create_product',['category' => $category,'subcategory' => $subcategory]);
   }
   public function created(Request $request){

       $product = new  Products;
       $product->qty = $request->qty;
       $product->category_id = $request->Category;
       $product->subcategory_id = $request->Subcategory;
       $product->name = $request->name;
       $product->Details = $request->Description;
       $product->price = $request->price;
       $product->subcategory_id = $request->Subcategory;
       $file = $request->file('image');
            $filename = time() . '.' . $request->file('image')->extension();
            $filePath = public_path() . '/image/uploads/';
            $file->move($filePath, $filename);
            $product->image ='/image/uploads/'.$filename;
            $product->save();

       return redirect('/Admin/Product');

   }
   public function update($id){
    $product = Products::find($id);
    $category = category::all();
    $subcategory = subcategory::all();
   return view('Backend.Create_product',['category' => $category,'subcategory' => $subcategory,'product'=>$product]);
  }

  public function updated(Request $request,$id){

    $product = Products::find($id);
    $product->qty = $request->qty;
    $product->category_id = $request->Category;
    $product->subcategory_id = $request->Subcategory;
    $product->name = $request->name;
    $product->Details = $request->Description;
    $product->price = $request->price;
    $product->subcategory_id = $request->Subcategory;
    if($request->file('image')){
    $file = $request->file('image');
         $filename = time() . '.' . $request->file('image')->extension();
         $filePath = public_path() . '/image/uploads/';
         $file->move($filePath, $filename);
         $product->image ='/image/uploads/'.$filename;
    }
         $product->save();

    return redirect()->back();
  }

   public function delete($id){

       $user = Products::find($id)->delete();
       return redirect()->back();


   }
}
