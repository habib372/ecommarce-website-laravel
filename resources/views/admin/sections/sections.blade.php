@extends('layouts.admin_layouts.admin_layout')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Sections</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}">Home</a></li>
              <li class="breadcrumb-item active">Sections</li>
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
                        <h3 class="card-title">Sections</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="sections" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Section name</th>
                                    <th>Status</th>                        
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Sections as $section)
                                <tr>
                                    <td>{{$section->id}}</td>
                                    <td>{{$section->name}}</td>
                                    <td>{{$section->status}}</td>                       
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