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
        <li class="breadcrumb-item active">All Category</li>
      </ol>
      @include('admin.includes.notify')
      
      
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-file"></i>All Categories</h2>
        <h2 style="float: right;"><i class="fa fa-file"></i><a href="{{route('category.create')}}">Add Category</a></h2>
      </div>
      <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                  <tr>
                      <th>Name</th>
                      <th>Created at</th>
                      <th>Updated at</th>
                      <th>Action</th>                      
                  </tr>
              </thead>
              <tbody>
                @foreach($data as $category)
                  <tr>
                      <td>{{ $category->name }}</td>
                      <td>{{ $category->created_at }}</td>
                      <td>{{ $category->updated_at }}</td>
                      <td><a href="{{route('category.edit', $category->id)}}" style="color:blue">Edit</a> / <a href="" data-toggle="modal" data-target="#deleteModal{{ $category->id }}" style="color:red">Delete</a></td>
                      
                  </tr>
                  <div class="modal fade" id="deleteModal{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <form action="{{ route('category.destroy', $category->id)}}" method="post">
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
                      <th>Created at</th>
                      <th>Updated at</th>
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

