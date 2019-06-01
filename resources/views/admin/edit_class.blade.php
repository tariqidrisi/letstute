@extends('admin.layouts.app')
@section('content')
  <!-- /Navigation-->
  <div class="content-wrapper">
    <form  method="POST" action="{{route('class.update', $data->id)}}">
      @method('PATCH')
      @csrf
      <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Edit Class</li>
      </ol>
      @include('admin.includes.notify')
     
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-file"></i>Edit Class</h2>
        <h2 style="float: right;"><i class="fa fa-file"></i><a href="{{route('class.index')}}">View All Class</a></h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" value="{{ $data->name }}" class="form-control" name="class" placeholder="Class" required="">
          </div>
        </div>
        
      </div>
      <!-- /row-->
      <!-- /row-->
    </div>
    <!-- /box_general-->
    
    <p><button type="submit" name="addClass" class="btn_1 medium">Update</button></p>
    </div>
    <!-- /.container-fluid-->
   </form>
    </div>
    <!-- /.container-wrapper-->
    
    
@stop
