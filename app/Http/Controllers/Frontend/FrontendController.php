<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AssignDoctor;
use App\Models\Branch;
use App\Models\Carrier;
use App\Models\Etender;
use App\Models\Gallery;
use App\Models\Ibchk;
use App\Models\IbchkDep;
use App\Models\IbhDept;
use App\Models\IbhDoctor;
use App\Models\Logo;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    //
    public function index(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::orderBy('id','desc')->get();
        $data['branches']=Branch::all();
        return view ('frontend.layouts.home',$data);

    }

    public function foundationcommittee(){
        $data['branches']=Branch::all();
        $data['logo']=Logo::first();
        return view('frontend.pages.foundation_committee',$data);
    }

    public function atglance(){
        $data['branches']=Branch::all();
        $data['logo']=Logo::first();
        return view('frontend.pages.atglance',$data);
    }

    public function executivecommittee(){
        $data['branches']=Branch::all();
        $data['logo']=Logo::first();
        return view('frontend.pages.executive_committee',$data);
    }
    public function healtheducationcommittee(){
        $data['logo']=Logo::first();
        $data['branches']=Branch::all();
        return view('frontend.pages.health_education_committee',$data);
    }

    public function auditcommittee(){
        $data['branches']=Branch::all();
        $data['logo']=Logo::first();
        return view('frontend.pages.audit_committee',$data);
    }
    public function hospitalcommittee(){
        $data['logo']=Logo::first();
        return view('frontend.pages.hospital_committee',$data);
    }

    public function communityhospitalboard(){
        $data['branches']=Branch::all();
        $data['logo']=Logo::first();
        return view('frontend.pages.community_hospital_board',$data);
    }

    public function educationcommittee(){
        $data['logo']=Logo::first();
        return view('frontend.pages.education_committee',$data);
    }

    public function communityhospitalcommittee(){
        $data['logo']=Logo::first();
        return view('frontend.pages.community_hospital_committee',$data);
    }
    public function hospitalinfo(){
        $data['logo']=Logo::first();
        return view('frontend.pages.hospital_info',$data);
    }
    //Get Subcategory With Ajax

    /*public function getIbchDoctor($ibchd_id){

        $subcat=Ibchk::where('ibchkdep_id',$ibchd_id)->orderBy('name','ASC')->get();

        return json_encode($subcat);
    }*/
    public function etender(){

        $now=  date('Y-m-d'); $data['logo']=Logo::first();
        $data['branches']=Branch::all();
        $data['allData']=Etender::where('deadline', '>=',$now)->orderBy('id','desc')->get();

        return view('frontend.pages.etender',$data);

    }
    //Gallary

    public function gallary(){


        $data['logo']=Logo::first();
        $data['branches']=Branch::all();
        $data['gallaries']= collect(Gallery::all())->chunk(4);

        return view('frontend.pages.gallary',$data);


    }
    //Department-wise Doctor Search

    public function DepartmentDoctor(){

        $now=  date('Y-m-d');
        $data['logo']=Logo::first();
        $data['branches']=Branch::all();
        $data['departments']=IbhDept::all();
     /*   $data['dep_id']=IbhDept::orderBy('id','asc')->first()->id;*/
        return view('frontend.pages.department-wise',$data);

    }

    public function BranchFindDoctor(){
        $data['logo']=Logo::first();
        $data['branches']=Branch::all();
        $data['departments']=IbhDept::all();

        return view('frontend.pages.branchwise_doctor',$data);
    }
//Name-Wise Doctor Find
public function NameFindDoctor(){

    $data['logo']=Logo::first();
    $data['branches']=Branch::all();
    $data['departments']=IbhDept::all();

    return view('frontend.pages.name_wise_doctor',$data);

}
    public function career(){

        $now=  date('Y-m-d'); $data['logo']=Logo::first();
        $data['branches']=Branch::all();
        $data['allData']=Carrier::where('deadline', '>=',$now)->orderBy('id','desc')->get();

        return view('frontend.pages.career',$data);

    }
    public function jakat(){
        $data['logo']=Logo::first();
        return view('frontend.pages.jakat',$data);
    }
    public function contact(){
        $data['branches']=Branch::all();
        $data['logo']=Logo::first();
        return view('frontend.pages.contact',$data);
    }

    public function ibch(){
        $data['logo']=Logo::first();
        $data['branches']= Branch::all();
        /*$data['allData']=IbhDoctor::join('branches','ibh_doctors.branch_id','=','branches.id')
            ->join('ibh_depts','ibh_doctors.dep_id','=','ibh_depts.id')
            ->where('branch_id','2')

            ->get();*/
        $data['departments']=IbhDept::orderBy('name', 'ASC')->get();

        $data['doctor'] = IbhDoctor::join('branches','ibh_doctors.branch_id','=','branches.id')
            ->join('ibh_depts','ibh_doctors.dep_id','=','ibh_depts.id')
            ->where('branch_id','2')
            ->select('ibh_doctors.*','branches.name','ibh_depts.name')
            ->orderBy('ibh_depts.name','ASC')
            ->get();

        Session::put('branchId', 2);



        return view('frontend.pages.ibch',$data);
    }

    public function ibchDoctor(){
    $data['logo']=Logo::first();
    $data['departments']=IbhDept::all();
    $data['branches']=Branch::where('branch_id', '2')->get();
    return view('frontend.pages.ibch_doctor',$data);
}

    public function ibchCard(){
        $data['logo']=Logo::first();
        $data['departments']=IbhDept::all();
        /*$data['allData']=AssignDoctor::where('branch_id','3','dep_id','4')->get();*/
        $data['allData'] = DB::table('ibh_doctors')->get();


        return view('frontend.pages.ibch-cardiology',$data);
    }
    public function ibchGyno(){
        $data['logo']=Logo::first();
        $data['ibchkdeps']=IbchkDep::all();
        $data['allData']=Ibchk::where('ibchkdep_id', '4')->get();
        return view('frontend.pages.ibch-gyno',$data);
    }

    public function ibchUro(){
        $data['logo']=Logo::first();
        $data['ibchkdeps']=IbchkDep::all();
        $data['allData']=Ibchk::where('ibchkdep_id', '2')->get();
        return view('frontend.pages.ibch-uro',$data);
    }
    public function childIbch(){

        $data['logo']=Logo::first();
        $data['ibchkdeps']=IbchkDep::all();
        $data['allData']=Ibchk::where('ibchkdep_id', '8')->get();
        return view('frontend.pages.ibch-child',$data);
    }
    public function ibchmedi(Request $request){


        $data['logo']=Logo::first();
        $data['departments']=IbhDept::all();
        $data['branches']=Branch::all();
        return view('frontend.pages.ibch-medi',$data);
        /*
        $data['ibchkdeps']=IbchkDep::all();


        $data['branch_id']=$request->branch_id;
        $data['dep_id']=$request->dep_id;
        $data['allData']=AssignDoctor::where('branch_id',$request->branch_id)->where('dep_id',$request->dep_id)->get();*/
    /*$data['logo']=Logo::first();
    $data['ibchkdeps']=IbchkDep::all();
    $data['allData']=Ibchk::where('ibchkdep_id', '8')->get();*/

}

    public function ibchdoctorview(){



        $data['logo']=Logo::first();
        $data['branches']=Branch::orderBy('id', 'asc')->get();

        $data['departments']=IbhDept::all();
        $data['branch_id']=Branch::orderBy('id','asc')->first()->id;
        $data['dep_id']=IbhDept::orderBy('id','asc')->first()->id;
        $data['allData']=AssignDoctor::where('branch_id','2')->where('dep_id',$data['dep_id'])->get();
        return view('frontend.pages.central-hospital-doctor',$data);
    }

    public function chestMedi(){

        $data['logo']=Logo::first();
        $data['ibchkdeps']=IbchkDep::all();
        $data['allData']=Ibchk::where('ibchkdep_id', '8')->get();
        return view('frontend.pages.ibch-chestMedi',$data);
    }

//motijheel
    public function motijheel($id){
        $data['logo']=Logo::first();
        /*$data['branches']=Branch::all();*/
        $data['departments']=IbhDept::all();
//        $data['branchs'] = Branch::all();

        $data['office']= IbhDoctor::with('department')->where('branch_id', $id)->get()->unique('dep_id');


        /*$data['allData']=IbhDoctor::join('branches','ibh_doctors.branch_id','=','branches.id')
            ->join('ibh_depts','ibh_doctors.dep_id','=','ibh_depts.id')
            ->where('branch_id','2')

            ->get();

        $data['doctor']=IbhDoctor::join('branches','ibh_doctors.branch_id','=','branches.id')
            ->join('ibh_depts','ibh_doctors.dep_id','=','ibh_depts.id')
            ->where('branch_id','5')
            ->select('ibh_doctors.*','branches.name','ibh_depts.name')
            ->orderBy('dep_id','DESC')
            ->get();*/

        return view('frontend.pages.motijheel_hospital',$data);
    }

  /*public function Head($id){


        $data['logo']=Logo::first();

        $data['heads']=IbhDept::all();
        $data['sliders']=Slider::orderBy('id','desc')->get();
      $data['branches']=Branch::all();
       $data['office']= IbhDoctor::with('department')->where('branch_id', $id)->get()->unique('dep_id');



        return view ('frontend.pages.ibch-medi',$data);
    }*/



    public function mugdha(){

        $data['departments']=IbhDept::all();
        $data['branches']= Branch::all();
        /*$data['ibchkdeps']=IbhDept::all();*/
        $data['logo']=Logo::first();



      $data['doctor']=IbhDoctor::join('branches','ibh_doctors.branch_id','=','branches.id')
            ->join('ibh_depts','ibh_doctors.dep_id','=','ibh_depts.id')
            ->where('branch_id','7')
            ->select('ibh_doctors.*','branches.name','ibh_depts.name')
          ->orderBy('doctor_name','ASC')
            ->get();

        Session::put('branchId', 7);

        return view('frontend.pages.ibh_mugdha',$data);
    }

    public function Paltan(){
        $data['departments']=IbhDept::all();
        $data['logo']=Logo::first();

        $data['doctor']=IbhDoctor::join('branches','ibh_doctors.branch_id','=','branches.id')
            ->join('ibh_depts','ibh_doctors.dep_id','=','ibh_depts.id')
            ->where('branch_id','8')
            ->select('ibh_doctors.*','branches.name','ibh_depts.name')
            ->orderBy('dep_id','DESC')
            ->get();

        Session::put('branchId', 8);

        return view('frontend.pages.naya_paltan',$data);
    }
    public function barisal(){
        $data['departments']=IbhDept::orderBy('name', 'ASC')->get();
        $data['logo']=Logo::first();

        $data['doctor']=IbhDoctor::join('branches','ibh_doctors.branch_id','=','branches.id')
            ->join('ibh_depts','ibh_doctors.dep_id','=','ibh_depts.id')
            ->where('branch_id','6')
            ->select('ibh_doctors.*','branches.name','ibh_depts.name')
            ->orderBy('ibh_depts.name','ASC')
            ->get();

        Session::put('branchId', 6);

        return view('frontend.pages.barisal',$data);
    }

    public function khulna(){
        $data['departments']=IbhDept::orderBy('name', 'ASC')->get();
        $data['logo']=Logo::first();
        $data['branches']= Branch::all();
        $data['doctor']=IbhDoctor::join('branches','ibh_doctors.branch_id','=','branches.id')
            ->join('ibh_depts','ibh_doctors.dep_id','=','ibh_depts.id')
            ->where('branch_id','9')
            ->select('ibh_doctors.*','branches.name','ibh_depts.name')
            ->orderBy('ibh_depts.name','ASC')
            ->get();

        Session::put('branchId', 9);

        return view('frontend.pages.ibh-khulna',$data);
    }
//Rajshahi  Luxmipur

    public function IbhRajshahiLux(){
        $data['departments']=IbhDept::orderBy('name', 'ASC')->get();
        $data['logo']=Logo::first();
        $data['branches']= Branch::all();
        $data['doctor']=IbhDoctor::join('branches','ibh_doctors.branch_id','=','branches.id')
            ->join('ibh_depts','ibh_doctors.dep_id','=','ibh_depts.id')
            ->where('branch_id','10')
            ->select('ibh_doctors.*','branches.name','ibh_depts.name')
            ->orderBy('ibh_depts.name','ASC')
            ->get();

        Session::put('branchId', 10);

        return view('frontend.pages.ibh_rajshahi_luxmipur',$data);
    }
//Rajshahi  Nawdapara

    public function IbhRajshahiNawdapara(){
        $data['departments']=IbhDept::orderBy('name', 'ASC')->get();
        $data['logo']=Logo::first();
        $data['branches']= Branch::all();
        $data['doctor']=IbhDoctor::join('branches','ibh_doctors.branch_id','=','branches.id')
            ->join('ibh_depts','ibh_doctors.dep_id','=','ibh_depts.id')
            ->where('branch_id','11')
            ->select('ibh_doctors.*','branches.name','ibh_depts.name')
            ->orderBy('ibh_depts.name','ASC')
            ->get();

        Session::put('branchId', 11);

        return view('frontend.pages.ibh-rajshahi-nawdapara',$data);
    }

    //Chottagram

    public function IbhChottagram(){
        $data['departments']=IbhDept::orderBy('name', 'ASC')->get();
        $data['logo']=Logo::first();
        $data['branches']= Branch::all();
        $data['doctor']=IbhDoctor::join('branches','ibh_doctors.branch_id','=','branches.id')
            ->join('ibh_depts','ibh_doctors.dep_id','=','ibh_depts.id')
            ->where('branch_id','12')
            ->select('ibh_doctors.*','branches.name','ibh_depts.name')
            ->orderBy('ibh_depts.name','ASC')
            ->get();

        Session::put('branchId', 12);

        return view('frontend.pages.ibh-chottagram',$data);
    }
//Community Hospital Faridpur
    public function IbchFaridpur(){
        $data['departments']=IbhDept::orderBy('name', 'ASC')->get();
        $data['logo']=Logo::first();
        $data['branches']= Branch::all();
        $data['doctor']=IbhDoctor::join('branches','ibh_doctors.branch_id','=','branches.id')
            ->join('ibh_depts','ibh_doctors.dep_id','=','ibh_depts.id')
            ->where('branch_id','13')
            ->select('ibh_doctors.*','branches.name','ibh_depts.name')
            ->orderBy('ibh_depts.name','ASC')
            ->get();

        Session::put('branchId', 13);

        return view('frontend.pages.ibch-faridpur',$data);
    }

//Community Hospital Rangpur
    public function IbchRangpur(){
        $data['departments']=IbhDept::orderBy('name', 'ASC')->get();
        $data['logo']=Logo::first();
        $data['branches']= Branch::all();
        $data['doctor']=IbhDoctor::join('branches','ibh_doctors.branch_id','=','branches.id')
            ->join('ibh_depts','ibh_doctors.dep_id','=','ibh_depts.id')
            ->where('branch_id','14')
            ->select('ibh_doctors.*','branches.name','ibh_depts.name')
            ->orderBy('ibh_depts.name','ASC')
            ->get();

        Session::put('branchId', 14);

        return view('frontend.pages.ibch-rangpur',$data);
    }
//Community Hospital Dinajpur
    public function IbchDinajpur(){
        $data['departments']=IbhDept::orderBy('name', 'ASC')->get();
        $data['logo']=Logo::first();
        $data['branches']= Branch::all();
        $data['doctor']=IbhDoctor::join('branches','ibh_doctors.branch_id','=','branches.id')
            ->join('ibh_depts','ibh_doctors.dep_id','=','ibh_depts.id')
            ->where('branch_id','15')
            ->select('ibh_doctors.*','branches.name','ibh_depts.name')
            ->orderBy('ibh_depts.name','ASC')
            ->get();

        Session::put('branchId', 15);

        return view('frontend.pages.ibch-dinajpur',$data);
    }
    //Community Hospital Naogaon
    public function IbchNaogaon(){
        $data['departments']=IbhDept::orderBy('name', 'ASC')->get();
        $data['logo']=Logo::first();
        $data['branches']= Branch::all();
        $data['doctor']=IbhDoctor::join('branches','ibh_doctors.branch_id','=','branches.id')
            ->join('ibh_depts','ibh_doctors.dep_id','=','ibh_depts.id')
            ->where('branch_id','16')
            ->select('ibh_doctors.*','branches.name','ibh_depts.name')
            ->orderBy('ibh_depts.name','ASC')
            ->get();

        Session::put('branchId', 16);

        return view('frontend.pages.ibch-naogaon',$data);
    }

    //Community Hospital Jehnaidah
    public function IbchJhenaidah(){
        $data['departments']=IbhDept::orderBy('name', 'ASC')->get();
        $data['logo']=Logo::first();
        $data['branches']= Branch::all();
        $data['doctor']=IbhDoctor::join('branches','ibh_doctors.branch_id','=','branches.id')
            ->join('ibh_depts','ibh_doctors.dep_id','=','ibh_depts.id')
            ->where('branch_id','17')
            ->select('ibh_doctors.*','branches.name','ibh_depts.name')
            ->orderBy('ibh_depts.name','ASC')
            ->get();

        Session::put('branchId', 17);

        return view('frontend.pages.ibch-Jhenaidah',$data);
    }

    //Community Hospital Manikgonj
    public function IbchManikgonj(){
        $data['departments']=IbhDept::orderBy('name', 'ASC')->get();
        $data['logo']=Logo::first();
        $data['branches']= Branch::all();
        $data['doctor']=IbhDoctor::join('branches','ibh_doctors.branch_id','=','branches.id')
            ->join('ibh_depts','ibh_doctors.dep_id','=','ibh_depts.id')
            ->where('branch_id','18')
            ->select('ibh_doctors.*','branches.name','ibh_depts.name')
            ->orderBy('ibh_depts.name','ASC')
            ->get();

        Session::put('branchId', 18);

        return view('frontend.pages.ibch-manikgonj',$data);
    }
//Community Hospital Satkhera
    public function IbchSatkhera(){
        $data['departments']=IbhDept::orderBy('name', 'ASC')->get();
        $data['logo']=Logo::first();
        $data['branches']= Branch::all();
        $data['doctor']=IbhDoctor::join('branches','ibh_doctors.branch_id','=','branches.id')
            ->join('ibh_depts','ibh_doctors.dep_id','=','ibh_depts.id')
            ->where('branch_id','19')
            ->select('ibh_doctors.*','branches.name','ibh_depts.name')
            ->orderBy('ibh_depts.name','ASC')
            ->get();

        Session::put('branchId', 19);

        return view('frontend.pages.ibch-satkhera',$data);
    }
    //Community Hospital Madaripur
    public function IbchMadaripur(){
        $data['departments']=IbhDept::orderBy('name', 'ASC')->get();
        $data['logo']=Logo::first();
        $data['branches']= Branch::all();
        $data['doctor']=IbhDoctor::join('branches','ibh_doctors.branch_id','=','branches.id')
            ->join('ibh_depts','ibh_doctors.dep_id','=','ibh_depts.id')
            ->where('branch_id','20')
            ->select('ibh_doctors.*','branches.name','ibh_depts.name')
            ->orderBy('ibh_depts.name','ASC')
            ->get();

        Session::put('branchId', 20);

        return view('frontend.pages.ibch-madaripur',$data);
    }
    //Community Hospital Mymensingh
    public function IbchMymensingh(){
        $data['departments']=IbhDept::orderBy('name', 'ASC')->get();
        $data['logo']=Logo::first();
        $data['branches']= Branch::all();
        $data['doctor']=IbhDoctor::join('branches','ibh_doctors.branch_id','=','branches.id')
            ->join('ibh_depts','ibh_doctors.dep_id','=','ibh_depts.id')
            ->where('branch_id','21')
            ->select('ibh_doctors.*','branches.name','ibh_depts.name')
            ->orderBy('ibh_depts.name','ASC')
            ->get();

        Session::put('branchId', 21);

        return view('frontend.pages.ibch-mymensing',$data);
    }

    public function Finddoctor (){

        $data['branches']=Branch::all();
        $data['logo']=Logo::first();
        return view('frontend.pages.finddoctor',$data);

    }

    public function Finddoctor1 ($bracnId){

        $data['branches']= Branch::all();
        $data['hotline'] = Branch::where('id', $bracnId)->get();
      $data['brancheData']= Branch::where('id', $bracnId)->first('name');
        $data['branchContract']= Branch::where('id', $bracnId)->get();
        $data['logo']= Logo::first();
        $data['ibhdoctor'] = IbhDoctor::where('branch_id', $bracnId)->get();
        return view('frontend.pages.finddoctor1',$data);

    }



//Islami Bank Insitute of Technology

    public function IbitDhaka(){
        $data['logo']=Logo::first();
        $data['branches']= Branch::all();
        return view('frontend.pages.ibit-dhaka',$data);
    }


}
