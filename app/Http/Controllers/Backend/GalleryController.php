<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{

    public function view(){
       // dd('ok');
        $data['allData'] = DB::select('select * from gallerys');

       /* $data['allData']=Slider::all();*/


        return view ('backend.gallery.view-gallery', $data);


    }

}
