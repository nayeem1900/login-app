<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\IbhDept;
use Illuminate\Http\Request;

class IbhdeptController extends Controller
{
    public function view(){

        $data['allData']=IbhDept::all();

        return view ('backend.department.view-dep',$data);
    }
    public function add(){


        return view('backend.department.add-dep');
    }

    public function store(Request $request){
        $this->validate($request,[

            'name'=>'required|unique:ibh_depts,name',
        ]);

        $data =new IbhDept();
        $data->name=$request->name;

        $data->save();
        session()->flash('success',' Department Save success');
        return redirect()->route('dep.view');
    }
    public function edit($id){

        $editData=IbhDept::find($id);
        return view('backend.department.add-dep',compact('editData'));
    }

    public function update(Request $request,$id){

        $data =IbhDept::find($id);
        $this->validate($request,[

            'name'=>'required|unique:ibh_depts,name,'.$data->id
        ]);


        $data->name=$request->name;

        $data->save();
        session()->flash('success',' Department update success');
        return redirect()->route('dep.view');

    }

    public function delete($id){

        $data=IbhDept::find($id);
        $data->delete();

        session()->flash('success', 'Department has deleted Successfully');
        return redirect()->route('dep.view');
    }



}
