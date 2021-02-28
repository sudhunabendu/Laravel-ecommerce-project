<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;
use Intervention\Image\Facades\Image as Image;
use Validator;
use App\Category;
use File;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function add()
    {
        return view('admin.add_product');
    }

    public function store(Request $req)
    {
        $req->validate([
            'title' => 'required|max:150',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'slug' => 'required',
            'category_id'=>'required',
            'brand_id'=>'required'
        ]);

        $product = new Product;
        $product->title = $req->title;
        $product->description = $req->description;
        $product->price = $req->price;
        $product->quantity = $req->quantity;
        $product->slug = $req->slug;
        $product->category_id =$req->category_id;
        $product->brand_id =$req->brand_id;
        $product->admin_id = 1;
        $product->save();

        // if ($req->hasFile('product_img')) {
        //     $img = $req->file('product_img');
        //     $image = time() . '.' . $img->getClientOriginalExtension();
        //     $location = public_path('/images/home/' . $image);
        //     Image::make($img)->save($location);

        //     $product_image = new ProductImage;
        //     $product_image->product_id = $product->id;
        //     $product_image->image = $image;
        //     $product_image->save();
        // }
        if (count($req->product_img) > 0) {
            foreach ($req->product_img as $image) {

                // $img = $req->file('product_img');
                $img = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('/images/home/' . $img);
                Image::make($image)->save($location);

                $product_image = new ProductImage;
                $product_image->product_id = $product->id;
                $product_image->image = $img;
                $product_image->save();
            }
        }
        session()->flash('success', 'Product Addes successfully!!');
        return redirect()->route('add_product');
    }

    public function show()
    {
        $products = Product::orderBy('id', 'asc')->get();
        return view('admin.view_products')->with('products', $products);
    }

    public function update($id)
    {
        $product = Product::find($id);
        return view('admin.edit_products')->with('product', $product);
    }

    public function product_update(Request $req, $id)
    {
        $req->validate([
            'title' => 'required|max:150',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'slug' => 'required'
        ]);

        $product = Product::find($id);
        $product->title = $req->title;
        $product->description = $req->description;
        $product->price = $req->price;
        $product->quantity = $req->quantity;
        $product->slug = $req->slug;
        $product->category_id =$req->category_id;
        $product->brand_id =$req->brand_id;
        $product->save();
        return redirect()->route('view_product');
    }

    public function product_delete($id)
    {
        $product = Product::find($id);
        if (!is_null($product)) {
            $product->delete();
        }
        session()->flash('success', 'Product delete has been successfully');
        return redirect()->route('view_product');
    }
    
    public function showProducts($slug)
    {
        $product = Product::where('slug', $slug)->first();
        if (!is_null($product)) {
            return view('frontend.product_show', compact('product'));
        } else {
            session()->flash('errors', 'Sorry !! There is no Products by this url');
            return redirect()->route('index');
        }
    }

    public function search(Request $req)
    {
        $search = $req->search;
        $products = Product::orWhere('title', 'like', '%' . $search . '%')
            ->orWhere('description', 'like', '%' . $search . '%')
            ->orWhere('price', 'like', '%' . $search . '%')
            ->orWhere('slug', 'like', '%' . $search . '%')
            ->orWhere('quantity', 'like', '%' . $search . '%')
            ->orderBy('id', 'desc')
            ->paginate(9);
            if(!$products){
                return view('frontend.not_found');
            }else{
                return view('frontend.search', compact('search', 'products'));
            }
       
    }

    public function not_found(){

        return view('frontend.not_found');
    }

    public function check_out(){
        
        return view('frontend.chackout');
    }
}
