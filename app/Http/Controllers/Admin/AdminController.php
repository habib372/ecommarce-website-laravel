<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;
use Session;
use DB;

class AdminController extends Controller
{
    //dashboard
    public function dashboard(){
        return view('admin.admin_dashboard');
    }  

    //login
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;

            $rulse = [
                'email'=>'required|email|max:255',
                'password'=>'required',
             ];
            $message = [
                'email.required'=>'Email is required',
                'email.email'=>'Invalid email address',
                'password.required'=>'Password is required',
             ];
             $this->validate($request,$rulse,$message);

            if(Auth::guard('admin')->attempt(['email'=>$data['email'], 'password'=>$data['password']])){
                if(Auth::guard('admin')->user()->status == 1){
                    return redirect('/admin/dashboard');
                }
            }else{
                Session::flash('error_msg','Invalid email or password');
                return redirect()->back();
            }
        }
        return view('admin.admin_login');
    }

    //logout
    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }

    //show all admin
    public function adminlist(){
        // $AdminDetails = Admin::where('email', Auth::guard('admin')->user()->email)->first();
        $adminDetails = Admin::all();
        return view('admin.admin_list', ['adminDetails'=>$adminDetails]);
    }
    
    
}
