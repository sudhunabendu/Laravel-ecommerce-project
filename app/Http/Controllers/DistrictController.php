<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\District;
use App\Divisions;

class DistrictController extends Controller
{
    public function index(){
        $district = District::orderBy('name', 'asc')->get();
        return view('admin.districts.index', compact('district')); 
     }
 
     public function create(){
        $divisions = Divisions::orderBy('name', 'asc')->get();
         return view('admin.districts.create', compact('divisions'));
     }
 
     public function store(Request $req){
 
         $this->validate($req,[
             'name' => 'required',
             'division_id'=>'required'
         ],
         [
             'name.required' =>'Please Provide The Division Name',
             'division_id.required' =>'Please Provide The Division Priority',
         ]);
 
         $district = new District();
         $district->name = $req->name;
         $district->division_id = $req->division_id;
         $district->save();
         session()->flash('success','A New Division Has Been Successfully');
         return redirect()->route('show_district');
 
     }
 
     public function districtEdit($id)
     {
        $divisions = Divisions::orderBy('name', 'asc')->get();
         // $main_brand = Brand::orderBy('id', 'desc')->where('parent_id', NULL)->get();
         $district = District::find($id);
         if (!is_null($district)) {
             return view('admin.districts.editDistrict', compact('district','divisions'));
         } else {
             return redirect()->route('show_district');
         }
     }
 
     public function district_update(Request $req, $id)
     {
         $req->validate(
             [
                 'name' => 'required|max:150',
                 'division_id' => 'required'
             ],
             [
                 'name.required' => 'Please Provide A District Name',
         ]);
         
         $district = District::find($id);
         $district->name = $req->name;
         $district->division_id = $req->division_id;
       
         $district->save();
         session()->flash('success', 'District Update Successfully!!');
         return redirect()->route('show_district');
     }
 
     public function districts_delete($id)
     {
         $district = District::find($id);
         if (!is_null($district)) {
             $district->delete();
         }
         session()->flash('success', 'District Delete Has Been Successfully');
         return redirect()->route('view_district');
     }
 
}
