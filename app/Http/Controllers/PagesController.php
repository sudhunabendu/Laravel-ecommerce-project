<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Validator;
use App\Category;
use App\ProductImage;


class PagesController extends Controller
{
    // public function index()
    // {
    //     return view('index');
    // }

    public function products()
    {
        $products = Product::orderBy('id', 'asc')->get();
        return view('frontend.products')->with('products', $products);
    }

    public function cart(){
        return view('frontend.cart');
    }
    
}
