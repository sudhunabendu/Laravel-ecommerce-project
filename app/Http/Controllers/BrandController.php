<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
// use App\ProductImage;
use Intervention\Image\Facades\Image as Image;
use Validator;
use File;

class BrandController extends Controller
{
    public function showBrand()
    {
        $main_brand = Brand::orderBy('id', 'asc')->get();
        return view('admin.viewBrand', compact('main_brand'));
    }

    public function storeBrand()
    {
        return view('admin.addBrand');
    }

    public function craeteBrand(Request $req)
    {
        $req->validate(
            [
                'name' => 'required|max:150',
                'description' => 'required',
                'image' => 'nullable|image'
            ],
            [
                'name.required' => 'Please provide a Brand name',
                'image.image' => 'Please provide a valid image with .jpg, .png, .gif, .jpeg extension..',
            ]
        );
        $brand = new Brand();
        $brand->name = $req->name;
        $brand->description = $req->description;
        // $brand->parent_id = $req->parent_id;
        //image aslo insert

        // if (count($req->image) > 0) {

        // $img = $req->file('product_img');
        $image = $req->file('image');
        $img = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('/images/brands/' . $img);
        Image::make($image)->save($location);
        $brand->image = $img;
        // }
        $brand->save();

        session()->flash('success', 'Brand addes successfully!!');
        return redirect()->route('show_brand');
    }

    public function BrandEdit($id)
    {
        // $main_brand = Brand::orderBy('id', 'desc')->where('parent_id', NULL)->get();
        $brand = Brand::find($id);
        if (!is_null($brand)) {
            return view('admin.edit_brand', compact('brand'));
        } else {
            return redirect()->route('show_brand');
        }
    }

    public function Brand_update(Request $req, $id)
    {
        $req->validate(
            [
                'name' => 'required|max:150',
                'description' => 'required',
                'image' => 'nullable|image'
            ],
            [
                'name.required' => 'Please provide a Brand name',
                'image.image' => 'Please provide a valid image with .jpg, .png, .gif, .jpeg extension..',
        ]);
        
        $brand = Brand::find($id);
        $brand->name = $req->name;
        $brand->description = $req->description;
        if (File::exists('/images/brands/' . $brand->image)) {
            File::delete('/images/brands/' . $brand->image);
        }
        $image = $req->file('image');
        $img = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('/images/brands/' . $img);
        Image::make($image)->save($location);
        $brand->image = $img;
        $brand->save();
        session()->flash('success', 'Brand update successfully!!');
        return redirect()->route('show_brand');
    }

    public function Brand_delete($id)
    {
        $brand = Brand::find($id);
        if(!is_Null($brand)){
             if(File::exists('images/brands/'.$brand->image)){
                File::delete('images/brands/'.$brand->image);
            }
            $brand->delete();
        }
        session()->flash('success','Brand has deleted successfully');
        return back();
    }
}
