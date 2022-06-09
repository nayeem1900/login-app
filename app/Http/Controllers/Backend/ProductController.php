<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function view (){

        $data['allData']=Product::all();
        return view('backend.product.view-product',$data);

    }
    public function add(){
        $data['suppliers']=Supplier::all();
        $data['units']=Unit::all();
        $data['categories']=Category::all();

        return view('backend.product.add-product',$data);
    }
    public function store(Request $request){

        $product= new Product();
        $product->supplier_id = $request->supplier_id;
        $product->unit_id= $request->unit_id;
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->quantity ='0';
        $product->created_by=Auth::user()->id;
        $product->save();
        return redirect()->route('products.view')->with('success','Data Save Successfully');

    }

    public function edit($id){

        $data['editData']=Product::find($id);
        $data['suppliers']=Supplier::all();
        $data['units']=Unit::all();
        $data['categories']=Category::all();

        return view('backend.product.add-product',$data);
    }

    public function update(Request $request,$id){
        $product= Product::find($id);
        $product->supplier_id = $request->supplier_id;
        $product->unit_id= $request->unit_id;
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->updated_by=Auth::user()->id;
        $product->save();
        return redirect()->route('products.view')->with('success','Data Update Successfully');
    }
    public function delete($id){
        $unit=Product::find($id);
        $unit->delete();
        return redirect()->route('products.view')->with('success','Data Delete Successfully');
    }


}
