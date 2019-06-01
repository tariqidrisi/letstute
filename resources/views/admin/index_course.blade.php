@extends('admin.layouts.app')
@section('content')
  <!-- /Navigation-->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">All Course</li>
      </ol>
      @include('admin.includes.notify')
      
      
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-file"></i>All Courses</h2>
        <h2 style="float: right;"><i class="fa fa-file"></i><a href="{{route('course.create')}}">Add Course</a></h2>
      </div>
      <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                  <tr>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Price</th>
                      <th>Duration</th>
                      <th>Likes</th>
                      <th>Category</th>
                      <th>Class</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($data as $course)
                  <tr>
                      <td>{{ $course->name }}</td>
                      <td>{{ $course->description }}</td>
                      <td>{{ $course->price }}</td>
                      <td>{{ $course->duration }}</td>
                      <td>{{ $course->likes }}</td>
                      <td>{{ $course->category_id }}</td>
                      <td>{{ $course->class_id }}</td>
                      <td><a href="{{route('course.edit', $course->id)}}" style="color:blue">Edit</a> / <a href="" data-toggle="modal" data-target="#deleteModal{{ $course->id }}" style="color:red">Delete</a></td>
                      
                  </tr>
                  <div class="modal fade" id="deleteModal{{ $course->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">Select "Yes" below if you want to delete this record from database.</div>
                      <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <form action="{{ route('course.destroy', $course->id)}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger" >Yes</a>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </tbody>
              <tfoot>
                  <tr>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Price</th>
                      <th>Duration</th>
                      <th>Likes</th>
                      <th>Category</th>
                      <th>Class</th>
                      <th>Action</th>                      
                  </tr>
              </tfoot>
          </table><!-- /row-->
      <!-- /row-->
    </div>
    <!-- /box_general-->
    
    </div>
    <!-- /.container-fluid-->
    </div>
    <!-- /.container-wrapper-->
    
    
    
@stop

