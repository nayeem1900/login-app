<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Etender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EtenderController extends Controller
{
    public function view()
    {



        $data['allData'] = Etender::orderBy('id','desc')->get();

        return view('backend.etender.view-etender', $data);




    }

    public function add()
    {

        return view('backend.etender.add-etender');

    }

    public function store(Request $request)
    {

        $data = new Etender();
        $data->created_by = Auth::user()->id;
        $data->t_date = $request->t_date;
        $data->deadline = $request->deadline;
        $data->title = $request->title;
        if ($request->file('t_download')) {

            $file = $request->file('t_download');


            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/etender_images'), $filename);
            $data['t_download'] = $filename;
        }
        $data->save();
        session()->flash('success', ' Data save success');
        return redirect()->route('etenders.view');
    }

    public function edit($id)
    {

        $editData = Etender::find($id);
        return view('backend.etender.edit-etender',compact('editData'));
    }

    public function update(Request $request, $id)
    {

        $data =Etender::find($id);
        $data->updated_by = Auth::user()->id;
        $data->t_date = $request->t_date;
        $data->deadline = $request->deadline;
        $data->title = $request->title;
        if ($request->file('t_download')) {

            $file = $request->file('t_download');


            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/etender_images'), $filename);
            $data['t_download'] = $filename;
        }
        $data->save();
        session()->flash('success', ' Data save success');
        return redirect()->route('etenders.view');
    }

    public function delete($id){

        $etender=Etender::find($id);

        if(file_exists('upload/etender_images/' .$etender->t_download)AND !empty($etender->t_download)){
            unlink('public/upload/etender_images/' .$etender->t_download);
        }
        $etender->delete();
        return redirect()->route('etenders.view')->with('success', 'Data Deleted successfully');
    }

    public function download(){

        $downloads=DB::table('etenders')->get();
        return view('backend.etender.download',compact('downloads'));

    }

}
