<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Carrier;
use App\Models\Etender;
use App\Models\Ibchk;
use App\Models\IbchkDep;
use App\Models\Logo;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function index(){
        $data['logo']=Logo::first();
        $data['sliders']=Slider::orderBy('id','desc')->get();
        return view ('frontend.layouts.home',$data);

    }

    public function foundationcommittee(){
        $data['logo']=Logo::first();
        return view('frontend.pages.foundation_committee',$data);
    }

    public function atglance(){
        $data['logo']=Logo::first();
        return view('frontend.pages.atglance',$data);
    }

    public function executivecommittee(){
        $data['logo']=Logo::first();
        return view('frontend.pages.executive_committee',$data);
    }
    public function healtheducationcommittee(){
        $data['logo']=Logo::first();
        return view('frontend.pages.health_education_committee',$data);
    }

    public function auditcommittee(){
        $data['logo']=Logo::first();
        return view('frontend.pages.audit_committee',$data);
    }
    public function hospitalcommittee(){
        $data['logo']=Logo::first();
        return view('frontend.pages.hospital_committee',$data);
    }

    public function communityhospitalboard(){
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
        $data['allData']=Etender::where('deadline', '>=',$now)->orderBy('id','desc')->get();

        return view('frontend.pages.etender',$data);

    }
    public function career(){

        $now=  date('Y-m-d'); $data['logo']=Logo::first();
        $data['allData']=Carrier::where('deadline', '>=',$now)->orderBy('id','desc')->get();

        return view('frontend.pages.career',$data);

    }
    public function jakat(){
        $data['logo']=Logo::first();
        return view('frontend.pages.jakat',$data);
    }
    public function contact(){
        $data['logo']=Logo::first();
        return view('frontend.pages.contact',$data);
    }

    public function ibch(){
        $data['logo']=Logo::first();
        $data['allData']=IbchkDep::all();
        $data['allDoctor']=Ibchk::all();
        return view('frontend.pages.ibch',$data);
    }

    public function ibchDoctor(){
    $data['logo']=Logo::first();
    $data['ibchkdeps']=IbchkDep::all();
    $data['allData']=Ibchk::where('ibchkdep_id', '3')->get();
    return view('frontend.pages.ibch_doctor',$data);
}

    public function ibchCard(){
        $data['logo']=Logo::first();
        $data['ibchkdeps']=IbchkDep::all();
        $data['allData']=Ibchk::where('ibchkdep_id', '1')->get();
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
    public function ibchmedi(){

    $data['logo']=Logo::first();
    $data['ibchkdeps']=IbchkDep::all();
    $data['allData']=Ibchk::where('ibchkdep_id', '8')->get();
    return view('frontend.pages.ibch-medi',$data);
}
    public function chestMedi(){

        $data['logo']=Logo::first();
        $data['ibchkdeps']=IbchkDep::all();
        $data['allData']=Ibchk::where('ibchkdep_id', '8')->get();
        return view('frontend.pages.ibch-chestMedi',$data);
    }

//motijheel
    public function motijheel(){
        $data['logo']=Logo::first();
        $data['allData']=IbchkDep::all();
        $data['allDoctor']=Ibchk::all();
        return view('frontend.pages.motijheel_hospital',$data);
    }
}
