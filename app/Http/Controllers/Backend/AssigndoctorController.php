<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\IbhDept;
use App\Models\IbhDoctor;
use Illuminate\Http\Request;

class AssigndoctorController extends Controller
{
/*
    public function view1(){

        $data['departments']=IbhDept::all();
        $data['branches']=Branch::all();
        $data['allData']=IbhDoctor::all();


        return view ('backend.assign_doctor.view-assign-doctor',$data);
    }

    public function view(){
                $data['departments']=IbhDept::all();
                $data['branches']=Branch::all();
                 $data['allData']=IbhDoctor::select('branch_id')->groupBy('branch_id')->get();


            return view ('backend.assign_doctor.view-doctor',$data);
        }

    public function getbranch($branch_id){
        $department = IbhDept::where('branch_id',$branch_id)->orderBy('name','ASC')->get();
        return json_encode($department);
    }*/



    public function add(){

            $data['departments']=IbhDept::all();
            $data['branches']=Branch::all();

            return view('backend.assign_doctor.add-assign-doctor',$data);
        }

    /*public function store(Request $request){

            $assign_dep=new IbhDoctor();
            $assign_dep->branch_id=$request->branch_id;
            $assign_dep->dep_id=$request->dep_id;
            $assign_dep->doctor_name=$request->doctor_name;
            $assign_dep->degree=$request->degree;
            $assign_dep->schedule=$request->schedule;

        if ($request->file('img')) {

            $file = $request->file('img');


            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/doctor_images'), $filename);
            $assign_dep['img'] = $filename;
        }
            $assign_dep->save();




    session()->flash('success',' assign_doctor department update success');
    return redirect()->route('assign.doctor.view');
}*/





   /* public function store(Request $request){

        $countSubject=count($request->dep_id);

        if($countSubject != Null){
            for($i=0; $i < $countSubject ; $i++){
                $assign_sub=new IbhDoctor();
                $assign_sub->branch_id=$request->branch_id;
                $assign_sub->dep_id=$request->dep_id[$i];
                $assign_sub->doctor_name=$request->doctor_name[$i];
                $assign_sub->degree=$request->degree[$i];
                $assign_sub->schedule=$request->schedule[$i];

                if ($request->file('img')) {

                    $file = $request->file('img')[$i];


                    $filename = date('YmdHi') . $file->getClientOriginalName();
                    $file->move(public_path('upload/doctor_images'), $filename);
                    $data['img'] = $filename;
                }

                $assign_sub->save();

            }
        }

        session()->flash('success',' assign_doctor department update success');
        return redirect()->route('assign.doctor.view');
    }*/

    public function edit($branch_id){

         $data['editData']=IbhDoctor::find($branch_id);
           /* $data['editData']=IbhDoctor::where ('branch_id',$branch_id)->get();*/
            $data['departments']=IbhDept::all();
            $data['branches']=Branch::all();

            return view('backend.assign_doctor.edit-assign-doctor',$data);
        }

    public function update(Request $request,$branch_id){

                $assign_dep=IbhDoctor::find($branch_id);
                $assign_dep->branch_id=$request->branch_id;
                $assign_dep->dep_id=$request->dep_id;
                $assign_dep->doctor_name=$request->doctor_name;
                $assign_dep->degree=$request->degree;
                $assign_dep->schedule=$request->schedule;

                if ($request->file('img')) {

                    $file = $request->file('img');


                    $filename = date('YmdHi') . $file->getClientOriginalName();
                    $file->move(public_path('upload/doctor_images'), $filename);
                    $assign_dep['img'] = $filename;
                }
                $assign_dep->save();




        session()->flash('success',' assign_doctor department update success');
        return redirect()->route('assign.doctor.view');

    }


}
