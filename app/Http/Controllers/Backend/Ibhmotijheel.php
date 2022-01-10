<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Motijheeldep;
use Illuminate\Http\Request;

class Ibhmotijheel extends Controller
{
    public function view(){
        $data['allData']=Motijheeldep::all();
        return view('backend.motijheel.view-dept',$data);
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

    //Get Subcategory With Ajax

    public function getIbchDoctor(Request $request){

        $ibchkdep_id=$request->ibchkdep_id;

        $allIbchkDoctor = Ibchk::where('ibchkdep_id', $ibchkdep_id)->get();


        return response()->json($allIbchkDoctor);
    }



    //Get Subcategory With Ajax

    /*  public function getIbchDoctor(Request $request){

          $ibchkdep_id=$request->ibchkdep_id;
          $allIbchkDoctor=Ibchk::where('ibchkdep_id',$ibchkdep_id)->get();
          return response()->json($allIbchkDoctor);
      }   */




}
