<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function view (){

        $data['allData']=Category::all();
        return view('backend.category.view-category',$data);

    }
    public function add(){

        return view('backend.category.add-category');
    }
    public function store(Request $request){

        $unit= new Category();
        $unit->name = $request->name;
        $unit->created_by=Auth::user()->id;
        $unit->save();
        return redirect()->route('categories.view')->with('success','Data Save Successfully');

    }
    public function edit($id){

        $editData=Category::find($id);
        return view('backend.category.add-category',compact('editData'));
    }
    public function update(Request $request,$id){
        $unit= Category::find($id);
        $unit->name = $request->name;
        $unit->updated_by=Auth::user()->id;
        $unit->save();
        return redirect()->route('categories.view')->with('success','Data Update Successfully');
    }
    public function delete($id){
        $unit=Category::find($id);
        $unit->delete();
        return redirect()->route('categories.view')->with('success','Data Delete Successfully');
    }

}
