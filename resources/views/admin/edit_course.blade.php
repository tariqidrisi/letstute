@extends('admin.layouts.app')
@section('content')
  <!-- /Navigation-->
  <div class="content-wrapper">
    <form  method="POST" action="{{route('course.update', $data->id)}}">
      @method('PATCH')
      @csrf
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Edit course</li>
      </ol>
      @include('admin.includes.notify')
     
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-file"></i>Edit course</h2>
        <h2 style="float: right;"><i class="fa fa-file"></i><a href="{{route('course.index')}}">View All Course</a></h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" value="{{$data->name}}" class="form-control" name="course"  placeholder="Course" required="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="number" value="{{$data->price}}" class="form-control" name="price" placeholder="Price" required="">
          </div>
        </div>
        
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <textarea class="form-control" rows="8" name="description" placeholder="Description" required="">{{$data->description}}</textarea>
          </div>
        </div>
        
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <input type="text" value="{{$data->duration}}" class="form-control" name="duration" placeholder="Duration" required="" />
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="number" value="{{$data->likes}}" class="form-control" name="likes" placeholder="Likes" required="" />
          </div>
        </div>
        
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <select class="form-control" name="category_id" style="height: 45px">
              <option value="">Please Select Category</option>
              @foreach($categories as $category)
                <?php 
                  $cid = $data->category_id;
                  $selected = "";
                  if($cid == $category->id) {
                    $selected = "selected=''";
                  }

                ?>

                <option value="{{ $category->id }}" {{ $selected }}>{{ $category->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <select class="form-control" name="class_id" style="height: 45px">
              <option value="">Please Select Class</option>
              @foreach($classes as $class)
                <?php 
                  $clid = $data->class_id;
                  $selected = "";
                  if($clid == $class->id) {
                    $selected = "selected=''";
                  }

                ?>
                <option value="{{ $class->id }}" {{ $selected }}>{{ $class->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        
      </div>
      <!-- /row-->
      <!-- /row-->
    </div>
    <!-- /box_general-->
    
    <p><button type="submit" name="addcourse" class="btn_1 medium">Update</button></p>
    </div>
    <!-- /.container-fluid-->
   </form>
    </div>
    <!-- /.container-wrapper-->
    
@stop
