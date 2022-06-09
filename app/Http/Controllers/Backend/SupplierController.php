<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SupplierController extends Controller
{
     public function view (){

         $data['allData']=Supplier::all();
         return view('backend.supplier.view-supplier',$data);

     }

     public function add(){

         return view('backend.supplier.add-supplier');
     }

   public function store(Request $request){

        $supplier= new Supplier();
       $supplier->name = $request->name;
       $supplier->mobile_no=$request->mobile_no;
       $supplier->email=$request->email;
       $supplier->address=$request->address;
       $supplier->created_by=Auth::user()->id;
       $supplier->save();
       return redirect()->route('suppliers.view')->with('success','Data Save Successfully');

   }
public function edit($id){

       $editData=Supplier::find($id);
    return view('backend.supplier.add-supplier',compact('editData'));
}

public function update(Request $request,$id){
    $supplier= Supplier::find($id);
    $supplier->name = $request->name;
    $supplier->mobile_no=$request->mobile_no;
    $supplier->email=$request->email;
    $supplier->address=$request->address;
    $supplier->created_by=Auth::user()->id;
    $supplier->save();
    return redirect()->route('suppliers.view')->with('success','DataUpuccessfully');
}
public function delete($id){
$supplier=Supplier::find($id);
$supplier->delete();
    return redirect()->route('suppliers.view')->with('success','Data Delete puccessfully');
}
}
