<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{

    public function view(){
       // dd('ok');
        $data['allData']=Gallery::all();

       /* $data['allData']=Slider::all();*/


        return view ('backend.gallery.view-gallery', $data);

    }
    public function add(){

        return view('backend.gallery.add-gallery');

    }
    public function store(Request $request){

        $data = new Gallery();
        $data->created_by=Auth::user()->id;
        if ($request->file('image')) {

            $file = $request->file('image');


            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/gallery'), $filename);
            $data['image'] = $filename;
        }
        $data->desc = $request->desc;
        $data->save();
        session()->flash('success',' Data save success');
        return redirect()->route('gallerys.view');
    }

    public function edit($id)
    {

        $editData = Gallery::find($id);
        return view('backend.gallery.add-gallery',compact('editData'));
    }

    public function update(Request $request, $id)
    {

        $data =Gallery::find($id);
        $data->updated_by = Auth::user()->id;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/gallery'), $filename);
            $data['image'] = $filename;
        }
        $data->desc = $request->desc;
        $data->save();
        session()->flash('success', ' Data save success');
        return redirect()->route('gallerys.view');
    }

    public function delete($id){

        $data=Gallery::find($id);

        if(file_exists('upload/gallery/' .$data->image)AND !empty($data->image)){
            unlink('public/upload/gallery/' .$data->image);
        }
        $data->delete();
        return redirect()->route('gallerys.view')->with('success', 'Data Deleted successfully');
    }

}
