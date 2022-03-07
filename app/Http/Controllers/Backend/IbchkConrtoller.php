<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Branch;
use App\Models\Ibchk;
use App\Models\IbchkDep;
use App\Models\IbhDept;
use App\Models\IbhDoctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class IbchkConrtoller extends Controller
{
    public function view(){
        $data['allData']=IbchkDep::orderBy('id','desc')->get();
        return view('backend.ibchk.view-dept',$data);
    }

    public function add()
    {


        return view('backend.ibchk.add-dept');

    }

    public function store(Request $request){
        $this->validate($request,[

            'name'=>'required|unique:ibchk_deps,name',
        ]);

        $data =new IbchkDep();
        $data->name=$request->name;

        $data->save();
        session()->flash('success',' Data Save success');
        return redirect()->route('ibchk.dept.view');
    }
    public function edit($id){


        $editData=IbchkDep::find($id);
            return view('backend.ibchk.add-dept',compact('editData'));
        }

    public function update(Request $request,$id){

        $data =IbchkDep::find($id);
        $this->validate($request,[

            'name'=>'required|unique:ibchk_deps,name,'.$data->id
        ]);


        $data->name=$request->name;

        $data->save();
        session()->flash('success',' Data update success');
        return redirect()->route('ibchk.dept.view');

    }

    public function delete($id){


            $data=IbchkDep::find($id);
            $data->delete();
            session()->flash('success', 'data has deleted Successfully');
            return redirect()->route('ibchk.dept.view');
        }

      //Doctor
    public function ibchkdoctorview(){
        $data['ibchkdeps'] = IbchkDep::all();
        $data['allData']=Ibchk::all();
        return view('backend.ibchk.view-doctor-dept',$data);
    }
    public function ibchkdoctoradd()
    {
        $data['ibchkdeps'] = IbchkDep::all();
        $data['allData']=Ibchk::all();
        return view('backend.ibchk.add-doctor',$data);

    }
public function ibchkdoctorstore(Request $request){


    $data =new Ibchk();

    $data->ibchkdep_id=$request->ibchkdep_id;
    $data->name=$request->name;
    $data->ibchkdegree=$request->ibchkdegree;
    $data->ibchktime=$request->ibchktime;
    if ($request->file('image')) {

        $file = $request->file('image');


        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('upload/doctor_images'), $filename);
        $data['image'] = $filename;
    }
    $data->created_by = Auth::user()->id;

    $data->save();
    session()->flash('success',' Data Save success');
    return redirect()->route('ibchk.doctor.view');
}
public function ibchkdoctoredit($id){
;
    $data['ibchkdeps'] = IbchkDep::all();
    $data['editData']=Ibchk::find($id);
    return view('backend.ibchk.add-doctor',$data);
}

public function ibchkdoctorupdate(Request $request,$id){

    $data =Ibchk::find($id);
    $data->updated_by=Auth::user()->id;
    $data->ibchkdep_id=$request->ibchkdep_id;
    $data->name=$request->name;
    $data->ibchkdegree=$request->ibchkdegree;
    $data->ibchktime=$request->ibchktime;

    if ($request->file('image')) {

        $file = $request->file('image');
        @unlink(public_path('upload/doctor_images/' . $data->image));

        $filename = date('YmdHi') . $file->getClientOriginalName();
        $file->move(public_path('upload/doctor_images'), $filename);
        $data['image'] = $filename;
    }
    $data->save();
    session()->flash('success',' Data Save success');
    return redirect()->route('ibchk.doctor.view');

}
    public function ibchkdoctordelete($id){


        $data=Ibchk::find($id);
        $data->delete();
        session()->flash('success', 'data has deleted Successfully');
        return redirect()->route('ibchk.doctor.view');
    }



    public function getIbchDoctor(Request $request){

        $ibh_dep_id=$request->department_id;
        $allIbchkDoctor = IbhDoctor::join('ibh_depts','ibh_doctors.dep_id','=','ibh_depts.id')->where('dep_id', $ibh_dep_id)
            ->where('branch_id', Session::get('branchId'))->get();

        return response()->json($allIbchkDoctor);
    }

    public function findDoctor(Request $request){
        $branch_id=$request->branch_id;
        $data=IbhDoctor::all();

        return response()->json($data);
    }


    //Department wise Doctor Search


    public function findDoctorDepartment(Request $request){

       /* parant_table->join('child_table_name', "parant_table.child_table_id", '=', 'child_table_id')*/


/*     $doctors = IbhDoctor::where('branch_id', $request->branch_id)->where('dep_id', $request->dep_id)->get();*/

            $doctors = IbhDoctor::where('branch_id', $request->branch_id)->where('dep_id', $request->dep_id)->get();

/*        $doctors = IbhDoctor::where('branch_id', $request->branch_id)->where('dep_id', $request->dep_id)->whereNOTNull('doctor_name')->get();*/
        return view("frontend.pages.filter-doctor", compact('doctors'))->render();

//            $branch_id=$request->branch_id;
//            $department_wise_doctor=IbhDoctor::join('ibh_');


    }

    public function findDoctorBranch(Request $request){
        $doctors = IbhDoctor::where('branch_id', $request->branch_id)->get();

        return view("frontend.pages.filter-branch-doctor", compact('doctors'))->render();



    }
//Doctor Search By Name
    public function findDoctorName($name){
        $doctor_name=IbhDoctor::where("doctor_name", "LIKE", "%".$name."%")->get();


        return view("frontend.pages.filter-name-doctor", compact('doctor_name'))->render();


    }


}
