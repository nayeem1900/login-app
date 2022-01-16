<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AssignDoctor;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function getDoctor(Request $request){

        $branch_id=$request->branch_id;
        $dep_id=$request->dep_id;
        $allData=AssignDoctor::with(['doctor'])->where('branch_id',$branch_id)->where('dep_id',$dep_id)->get();
        return response()->json($allData);

    }



}
