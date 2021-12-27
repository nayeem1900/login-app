<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
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

    //Get Subcategory With Ajax

    /*public function getIbchDoctor($ibchd_id){

        $subcat=Ibchk::where('ibchkdep_id',$ibchd_id)->orderBy('name','ASC')->get();

        return json_encode($subcat);
    }*/


    public function ibch(){
        $data['logo']=Logo::first();
        $data['allData']=IbchkDep::all();
        $data['allDoctor']=Ibchk::all();
        return view('frontend.pages.ibch',$data);
    }

}
