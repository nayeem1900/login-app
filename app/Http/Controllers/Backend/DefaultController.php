<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AssignDoctor;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DefaultController extends Controller
{
    public function getDoctor(Request $request)
    {

        $branch_id = $request->branch_id;
        $dep_id = $request->dep_id;
        $allData = AssignDoctor::with(['doctor'])->where('branch_id', $branch_id)->where('dep_id', $dep_id)->get();
        return response()->json($allData);

    }

    public function getCategory(Request $request)
    {

        $supplier_id = $request->supplier_id;
        $allcategory = Product::with(['category'])->select('category_id')->where('supplier_id', $supplier_id)->groupBy('category_id')->get();
        /* dd($allcategory->toArray());*/
        return response()->json($allcategory);

    }

   public function getProduct(Request $request){

     $category_id = $request->category_id;
     $allproduct= Product::where('category_id',$category_id)->get();

       return response()->json($allproduct);

   }

}