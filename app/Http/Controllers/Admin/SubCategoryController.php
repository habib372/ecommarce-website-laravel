<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Subcategory;
use Session;

class SubCategoryController extends Controller
{
    public function subcategories(){
        Session::put('page','subcategory');
        $subcategories =Subcategory::all();
        return view('admin.subcategory.subcategory');
    }
}