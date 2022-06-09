<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Purchase;
use App\Models\Supplier;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PurchaseController extends Controller
{
    public function view (){

        $data['suppliers']=Supplier::all();
        $data['units']=Unit::all();
        $data['categories']=Category::all();
        $data['allData']=Purchase::orderBy('date','desc')->orderBy('id','desc')->get();
        return view('backend.purchase.view-purchase',$data);

    }

    public function add(){
        $data['suppliers']=Supplier::all();
        $data['units']=Unit::all();
        $data['categories']=Category::all();

        return view('backend.purchase.add-purchase',$data);
    }
    public function store(Request $request)
    {
        if ($request->category_id == null){
            return redirect()->back()->with("error"," Sorry !you do not select any item");
        }else{

         $count_category = count($request->category_id);
         for ($i=0; $i < $count_category; $i++){

            $purchase = new Purchase();
            $purchase->date = date('Y-m-d',strtotime($request->date[$i]));
            $purchase->purchase_no=$request->purchase_no[$i];
            $purchase->supplier_id=$request->supplier_id[$i];
             $purchase->category_id=$request->category_id[$i];
             $purchase->product_id=$request->product_id[$i];
             $purchase->buying_qty=$request->buying_qty[$i];
             $purchase->unit_price=$request->unit_price[$i];
             $purchase->buying_price=$request->buying_price[$i];
             $purchase->description=$request->description[$i];
             $purchase->created_by=Auth::user()->id;
             $purchase->status = '0';
             $purchase->save();



         }


        }

        return redirect()->route('purchases.view')->with('success','Data Delete Successfully');

    }



}
