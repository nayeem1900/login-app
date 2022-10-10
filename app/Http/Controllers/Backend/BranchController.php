<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function view(){

            $data['allData']=Branch::all();

         return view ('backend.branch.view-branch',$data);
        }
    public function add(){


            return view('backend.branch.add-branch');
        }

    public function store(Request $request){
        $this->validate($request,[

            'name'=>'required|unique:branches,name',
        ]);

        $data =new Branch();
        $data->name=$request->name;
        $data->address=$request->address;
        $data->mobile=$request->mobile;
        $data->hotline=$request->hotline;

        $data->save();
        session()->flash('success',' Branch update success');
        return redirect()->route('branch.view');
    }

    public function edit($id){

            $editData=Branch::find($id);
            return view('backend.branch.add-branch',compact('editData'));
        }
    public function update(Request $request,$id){

        $data =Branch::find($id);
        $this->validate($request,[

            'name'=>'required|unique:branches,name,'.$data->id
        ]);


        $data->name=$request->name;
        $data->address=$request->address;
        $data->mobile=$request->mobile;

        $data->save();
        session()->flash('success',' Branch update success');
        return redirect()->route('branch.view');

    }

    public function delete($id){

            $data=Branch::find($id);
            $data->delete();

            session()->flash('success', 'Branch has deleted Successfully');
            return redirect()->route('branch.view');
        }




}
