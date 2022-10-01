<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Session;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.admin_dashboard');
    }

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
                return redirect('/admin/dashboard');
            }else{
                Session::flash('error_msg','Invalid email or password');
                return redirect()->back();
            }
        }
        return view('admin.admin_login');
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/admin');
    }

   
}
