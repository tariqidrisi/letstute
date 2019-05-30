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
        <li class="breadcrumb-item active">All Categorie</li>
      </ol>
      
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-file"></i>All Categories</h2>
      </div>
      <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                  <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Created at</th>
                      <th>Updated at</th>
                      <th>Action</th>                      
                  </tr>
              </thead>
              <tbody>
                  <tr>
                      <td>23</td>
                      <td></td>
                      <td>{{ $row->created_at }}</td>
                      <td>{{ $row->updated_at }}</td>
                      <td><a href="{{ route('getProduct', $row->id) }}" style="color:blue">Edit</a> / <a href="{{ route('deleteProduct', $row->id) }}" style="color:red">Delete</a></td>
                      
                  </tr>
                @endforeach 
              </tbody>
              <tfoot>
                  <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Created at</th>
                      <th>Updated at</th>
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
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © UDEMA 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    
@stop

