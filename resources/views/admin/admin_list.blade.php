@extends('layouts.admin_layouts.admin_layout')
@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Admins</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Admins</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<section class="content-header">
    <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"><strong>Admin list</strong></h3>
                <button type='button' class='btn btn-default btn-sm float-right' name='CtSubmit'  data-toggle='modal' data-target='#create-product'>Create New Admin</i></button>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap ">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Mobile</th>
                      <th>Email</th>
                      <th>Password</th>                      
                      <th>Role</th>                      
                      <th>Status</th>                      
                      <th>action</th>                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><img src="{{asset('images/habib.jpg')}}" high="30px" width="30px" class="img-circle elevation-2" alt="User Image"> {{ $AdminDetails->name}}</td>
                      <td>+8801767177372</td>
                      <td>habib@gmail.com</td>                    
                      <td>hashing</td>                    
                      <td>Superadmin</td>                    
                      <td>1</td>                    
                      <td>edit|delete</td>                    
                    <tr>                   
                  </tbody>
                  <tbody>
                    <tr>
                      <td>imege|John Doe</td>
                      <td>+8801767177372</td>
                      <td>habibhasan351@gmail.com</td>                    
                      <td>hashing</td>                    
                      <td>Subadmin</td>                    
                      <td>0</td>                    
                      <td>edit|delete</td>                
                    <tr>                   
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div>
</div>
@endsection