<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
class HomeController extends Controller
{
    public function index()
    {


        $Product = Products::all();
        return view('FrontEnd.home',['Product' => $Product]);


    }
}
