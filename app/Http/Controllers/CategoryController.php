<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image;
use Validator;
use App\Category;
use File;

class CategoryController extends Controller
{
    public function showCategory()
    {
        $main_category = Category::orderBy('id', 'asc')->get();
        return view('admin.viewCategory', compact('main_category'));
    }

    public function storeCategory()
    {
        $main_category = Category::orderBy('id', 'desc')->where('parent_id', NULL)->get();
        return view('admin.addCategory', compact('main_category'));
    }

    public function craeteCategory(Request $req)
    {
        $req->validate(
            [
                'name' => 'required|max:150',
                'description' => 'required',
                'image' => 'nullable|image'
            ],
            [
                'name.required' => 'Please provide a category name',
                'image.image' => 'Please provide a valid image with .jpg, .png, .gif, .jpeg extension..',
            ]
        );
        $category = new Category();
        $category->name = $req->name;
        $category->description = $req->description;
        $category->parent_id = $req->parent_id;
        //image aslo insert

        // if (count($req->image) > 0) {

        // $img = $req->file('product_img');
        $image = $req->file('image');
        $img = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('/images/categories/' . $img);
        Image::make($image)->save($location);
        $category->image = $img;
        // }
        $category->save();

        session()->flash('success', 'category addes successfully!!');
        return redirect()->route('show_category');
    }

    public function categoryEdit($id)
    {
        $main_category = Category::orderBy('id', 'desc')->where('parent_id', NULL)->get();
        $category = Category::find($id);
        if (!is_null($category)) {
            return view('admin.edit_category', compact('category', 'main_category'));
        } else {
            return redirect()->route('show_category');
        }
    }

    public function category_update(Request $req, $id)
    {
        $req->validate(
            [
                'name' => 'required|max:150',
                'description' => 'required',
                'image' => 'nullable|image'
            ],
            [
                'name.required' => 'Please provide a category name',
                'image.image' => 'Please provide a valid image with .jpg, .png, .gif, .jpeg extension..',
            ]
        );
        $category = Category::find($id);
        $category->name = $req->name;
        $category->description = $req->description;
        $category->parent_id = $req->parent_id;
        //image aslo insert

        // if (count($req->image) > 0) {
        if (File::exists('/images/categories/' . $category->image)) {
            File::delete('/images/categories/' . $category->image);
        }

        $image = $req->file('image');
        $img = time() . '.' . $image->getClientOriginalExtension();
        $location = public_path('/images/categories/' . $img);
        Image::make($image)->save($location);
        $category->image = $img;
        // }
        $category->save();

        session()->flash('success', 'category update successfully!!');
        return redirect()->route('show_category');
    }

    public function category_delete($id)
    {
        $category = Category::find($id);
        if (!is_null($category)) {
            if ($category->parent_id == NULL) {

                $sub_category = Category::orderBy('id', 'desc')->where('parent_id', $category->id)->get();
                foreach ($sub_category as $sub) {

                    if (File::exists('/images/categories/' . $sub->image)) {
                        File::delete('/images/categories/' . $sub->image);
                    }
                    $sub->delete();
                }
            }
            $category->delete();
        }
        session()->flash('success', 'category delete has been successfully');
        return redirect()->route('show_category');
    }

    public function show($id){
        $category = Category::find($id);
        if(!is_null($category)){
            return view('frontend.show', compact('category'));
        }else{
            session()->flash('errors','Sorry !! There is no products');
            return redirect('/');
        }
    }

    public function index(){

    }
}
