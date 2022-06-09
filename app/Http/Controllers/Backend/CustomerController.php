<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{

    public function view (){

        $data['allData']=Customer::all();
        return view('backend.customer.view-customer',$data);

    }
    public function add(){

        return view('backend.customer.add-customer');
    }
    public function store(Request $request){

        $customer= new Customer();
        $customer->name = $request->name;
        $customer->mobile_no=$request->mobile_no;
        $customer->email=$request->email;
        $customer->address=$request->address;
        $customer->created_by=Auth::user()->id;
        $customer->save();
        return redirect()->route('customers.view')->with('success','Data Save Successfully');

    }
    public function edit($id){

        $editData=Customer::find($id);
        return view('backend.customer.add-customer',compact('editData'));
    }
    public function update(Request $request,$id){
        $customer= Customer::find($id);
        $customer->name = $request->name;
        $customer->mobile_no=$request->mobile_no;
        $customer->email=$request->email;
        $customer->address=$request->address;
        $customer->created_by=Auth::user()->id;
        $customer->save();
        return redirect()->route('customers.view')->with('success','Data Update puccessfully');
    }
    public function delete($id){
        $supplier=Customer::find($id);
        $supplier->delete();
        return redirect()->route('customers.view')->with('success','Data Delete puccessfully');
    }
}
