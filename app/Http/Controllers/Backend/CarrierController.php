<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Carrier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarrierController extends Controller
{
    public function view()
    {

        $data['allData'] = Carrier::all();


        return view('backend.carrier.view-carrier', $data);


    }

    public function add()
    {

        return view('backend.carrier.add-carrier');

    }

    public function store(Request $request)
    {

        $data = new Carrier();
        $data->created_by = Auth::user()->id;
        $data->t_date = $request->t_date;
        $data->deadline = $request->deadline;
        $data->title = $request->title;
        if ($request->file('t_download')) {

            $file = $request->file('t_download');


            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/carrier_images'), $filename);
            $data['t_download'] = $filename;
        }
        $data->save();
        session()->flash('success', ' Data save success');
        return redirect()->route('carriers.view');
    }

    public function edit($id)
    {

        $editData = Carrier::find($id);
        return view('backend.carrier.edit-carrier',compact('editData'));
    }

    public function update(Request $request, $id)
    {

        $data =Carrier::find($id);
        $data->updated_by = Auth::user()->id;
        $data->t_date = $request->t_date;
        $data->deadline = $request->deadline;
        $data->title = $request->title;
        if ($request->file('t_download')) {

            $file = $request->file('t_download');


            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/carrier_images'), $filename);
            $data['t_download'] = $filename;
        }
        $data->save();
        session()->flash('success', ' Data save success');
        return redirect()->route('carriers.view');
    }

    public function delete($id){

        $carrier=Carrier::find($id);

        if(file_exists('upload/carrier_images/' .$carrier->t_download)AND !empty($carrier->t_download)){
            unlink('upload/carrier_images/' .$carrier->t_download);
        }
        $carrier->delete();
        return redirect()->route('carriers.view')->with('success', 'Data Deleted successfully');
    }

    public function download(){

        $downloads=DB::table('carriers')->get();
        return view('backend.carrier.download',compact('downloads'));

    }
}
