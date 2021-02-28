<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Divisions;
use App\District;
class DivisionController extends Controller
{
    public function index(){
       $divisions = Divisions::orderBy('priority', 'asc')->get();
       return view('admin.divisions.index', compact('divisions')); 
    }

    public function create(){
        return view('admin.divisions.create');
    }

    public function store(Request $req){

        $this->validate($req,[
            'name' => 'required',
            'priority'=>'required'
        ],
        [
            'name.required' =>'Please Provide The Division Name',
            'priority.required' =>'Please Provide The Division Priority',
        ]);

        $divisions = new Divisions();
        $divisions->name = $req->name;
        $divisions->priority = $req->priority;
        $divisions->save();

        session()->flash('success','A New Division Has Been Successfully');
        return redirect()->route('show_division');

    }

    public function DivisionEdit($id)
    {
        // $main_brand = Brand::orderBy('id', 'desc')->where('parent_id', NULL)->get();
        $divisions = Divisions::find($id);
        if (!is_null($divisions)) {
            return view('admin.divisions.editDivision', compact('divisions'));
        } else {
            return redirect()->route('show_divisions');
        }
    }

    public function Division_update(Request $req, $id)
    {
        $req->validate(
            [
                'name' => 'required|max:150',
                'priority' => 'required'
            ],
            [
                'name.required' => 'Please Provide A Divisions Name',
                'priority.required' =>'please Provide The Division Priority',
        ]);

        $divisions = Divisions::find($id);
        $divisions->name = $req->name;
        $divisions->description = $req->description;
        $divisions->save();
        session()->flash('success', 'Divisions Update Successfully!!');
        return redirect()->route('show_divisions');
    }

    public function Divisions_delete($id)
    {
        $divisions = Divisions::find($id);
        if (!is_null($divisions)) {
            // delete all the districts for this divisions
            $districts = District::where('division_id',$divisions->id)->get();
            foreach($districts  as $district){
                $district->delete();
            }
            $divisions->delete();
        }
        session()->flash('success', 'Divisions Delete Has Been Successfully');
        return redirect()->route('view_divisions');
    }

}
