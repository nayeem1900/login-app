<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AssignDoctor;
use App\Models\Branch;
use App\Models\IbhDept;
use App\Models\IbhDoctor;
use App\Models\Logo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use niklasravnsborg\LaravelPdf\Facades\Pdf;

class DoctorregController extends Controller
{
    public function view(){

            $data['branches']=Branch::orderBy('id', 'asc')->get();
            $data['departments']=IbhDept::all();
            $data['branch_id']=Branch::orderBy('id','asc')->first()->id;
            $data['dep_id']=IbhDept::orderBy('id','asc')->first()->id;
            $data['allData']=AssignDoctor::where('branch_id',$data['branch_id'])->where('dep_id',$data['dep_id'])->get();


            return view ('backend.doctor_reg.view-doctor', $data);
        }


    public function BranchDeptWise(Request $request){

        $data['branches']=Branch::orderBy('id', 'asc')->get();

        $data['departments']=IbhDept::all();
        $data['branch_id']=$request->branch_id;
        $data['dep_id']=$request->dep_id;
        $data['allData']=AssignDoctor::where('branch_id',$request->branch_id)->where('dep_id',$request->dep_id)->get();

        return view ('backend.doctor_reg.view-doctor', $data);

    }

    public function add(){


            $data['branches']=Branch::orderBy('id', 'asc')->get();

            $data['departments']=IbhDept::all();


        return view ('backend.doctor_reg.add-doctor', $data);
        }



    public function store(Request $request){


            $user=new IbhDoctor();

            $user->doctor_name=$request->doctor_name;
            $user->degree=$request->degree;
            $user->schedule=$request->schedule;
            $user->dep_id=$request->dep_id;
             $user->branch_id=$request->branch_id;

        if($request->file('img')){

            $file=$request->file('img');
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/doctor_images'),$filename);
            $user['img']=$filename;
        }
        $user->created_by=Auth::user()->id;
            $user->save();

            $assign_doctor=new AssignDoctor();
            $assign_doctor->doctor_id=$user->id;;
            $assign_doctor->branch_id=$request->branch_id;
            $assign_doctor->dep_id=$request->dep_id;


            $assign_doctor->save();


        return redirect()->route('doctor.registration.view')->with('success', 'Data Insert successfull');
    }

    public function edit($doctor_id){


            $data['editData']=AssignDoctor::with(['doctor'])->where('doctor_id',$doctor_id)->first();
            /* dd($data['editData']->toArray());*/

            $data['branches']=Branch::orderBy('id', 'asc')->get();
            $data['departments']=IbhDept::all();


            return view('backend.doctor_reg.add-doctor',$data);
        }

    public function update(Request $request,$doctor_id){




                 $user=IbhDoctor::where('id',$doctor_id)->first();
                $user->doctor_name=$request->doctor_name;
                $user->degree=$request->degree;
                 $user->schedule=$request->schedule;
                $user->dep_id=$request->dep_id;
                $user->branch_id=$request->branch_id;


        if($request->file('img')){

            $file=$request->file('img');
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/doctor_images'),$filename);
            $user['img']=$filename;
        }
            $user->save();

        $assign_doctor=AssignDoctor::where('id',$request->id)->where('doctor_id',$doctor_id)->first();
        $assign_doctor->doctor_id=$user->id;;
        $assign_doctor->branch_id=$request->branch_id;
        $assign_doctor->dep_id=$request->dep_id;

            $assign_doctor->save();



        return redirect()->route('doctor.registration.view')->with('success', 'Doctor Insert successfull');


    }
    public function details($doctor_id)
    {

            $data ['details']=AssignDoctor::with(['doctor'])->where('doctor_id',$doctor_id)->first();
            $pdf = Pdf::loadView('backend/doctor_reg/doctor-details-pdf', $data);
            $pdf->SetProtection(['copy', 'print'], '', 'pass');
            return $pdf->stream('document.pdf');
        }


///Department wiese Doctor Show

public function ibchDoctor(){

//    $data['logo']=Logo::first();

//    $users = DB::table('ibh_doctors');
//              dd($users);
//    $data = IbhDoctor::all();
//
//    dd($data);
$data['doctor']=IbhDoctor::join('branches','ibh_doctors.branch_id','=','branches.id')
    ->join('ibh_depts','ibh_doctors.dep_id','=','ibh_depts.id')
    ->select('ibh_doctors.*','branches.name','ibh_depts.name')
    ->get();
   /* $doctrors = DB::table('ibh_doctors')
           ->join('branches','ibh_doctors.branch_id','=','branches.id')
           ->join('ibh_depts','ibh_doctors.dep_id','=','ibh_depts.id')
           ->select('ibh_doctors.*','branches.name','ibh_depts.name')

        ->get();*/
    $data['logo']=Logo::first();
    $dat['departments']=IbhDept::all();


//        ->join('ibh_doctors', 'ibh_doctors.branch_id', '=', 'branches.branch_id')
//
//
//        ->join(' ibh_doctors', 'ibh_doctors.dep_id', '=', 'ibh_depts.dep_id')
//        ->select('ibh_doctors.*', 'ibh_doctors.name', 'ibh_depts.name');
//        dd($users);
//        ->get();



    /*$data['logo']=Logo::first();


    $data=IbhDoctor::where('branch_id','name')->where('dep_id','name')->get();
    $productById = DB::table('ibh_doctors')
        ->join('branches', 'ibh_depts.branch_id', '=', 'branches.id')

        ->select('ibh_doctors.*', 'branches.name')
        ->where('ibh_doctors',$id)
        ->first();



    $data['branches']=Branch::all();
    $data['departments']=IbhDept::all();
    $data ['allData']=AssignDoctor::where('dep_id', '3')->get();


        data['editData']=AssignDoctor::with(['doctor'])->where('doctor_id')->first();
         dd($data['editData']->toArray());

    $data['branches']=Branch::orderBy('id', 'asc')->get();
    $data['departments']=IbhDept::all();*/


    return view('frontend.pages.central-hospital-doctor',$data);
}





}
