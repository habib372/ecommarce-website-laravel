<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Session;

class CategoryController extends Controller
{
    public function category(){
        Session::put('page','category');
        $Categories = Category::all();
        return view('admin.categories.category', compact('Categories'));
    }
    //category status ajax
    // public function UpdateCategoryStatus(Request $request){
    //     if($request->ajax()){
    //         $data = $request->all();
    //         if($data['status']=="Active"){
    //             $status = 0;
    //         }else{
    //             $status = 1;
    //         }
    //         Category::where('id', $data['category_id'])->update(['status'=>$status]);
    //         return response()->json(['status'=>$status, 'category_id'=>$data['category_id']]);
    //     }
    // }

}
