<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Section;

class SectionController extends Controller
{
    public function sections(){
        $Sections = Section::all();
        return view('admin.sections.sections', compact('Sections'));
    }
}
