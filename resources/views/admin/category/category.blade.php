@extends('layouts.admin_layouts.admin_layout')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Category</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">           
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Categories </h3>
                        <button type="button" class="btn btn-default btn-sm float-right border-primary" name="add-new-section"  data-toggle="modal" data-target="#add-new-section"><i class="fas fa-plus"></i> Add New Section</button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="sections" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Category</th>
                                    <th>Status</th>                        
                                    <th>Actions</th>                        
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Categories as $Category)
                                <tr>
                                    <td>{{$Category->id}}</td>
                                    <td>{{$Category->name}}</td>
                                    <td>
                                      @if($Category->status == 1)
                                        <a class="UpdateCategoryStatus text-primary" id="category-{{$Category->id}}" category_id="{{$Category->id}}" href="javascript:void(0)">Active</a>
                                      @else
                                        <a class="UpdateCategoryStatus text-danger" id="category-{{$Category->id}}" category_id="{{$Category->id}}" href="javascript:void(0)">Inactive</a>
                                      @endif                                     
                                    </td>
                                    <td>
                                      <a type="button" class="btn btn-default btn-sm float-left mr-1 border-success" name="edit-category" data-toggle="modal" data-target="#edit-category" title="edit" value="edit"><i class="fas fa-edit"></i></a>
                                      <form action="#" method="#" onsubmit="return confirm('Are you sure?')">
                                        <!-- @csrf
                                        @method("DELETE") -->
                                        <button type="submit" class="btn btn-default btn-sm btn-delete border-danger" name="delete-category" value="delete" title="delete"><i class="far fa-trash-alt"></i></button>
                                      </form>
                                    </td>                       
                                </tr> 
                                @endforeach                       
                            </tbody>                       
                        </table>
                    </div>
                    <!-- /.card-body -->
                    </div><!-- /.card -->           
                </div><!-- /.col -->           
            </div><!-- /.row -->           
        </div><!-- /.container-fluid -->     
    </section>

@endsection