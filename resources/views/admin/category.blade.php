@extends('admin.layouts.app')
@section('content')
  <!-- /Navigation-->
  <div class="content-wrapper">
  	<form  method="POST" action="{{route('category.store')}}">
  		{{ csrf_field() }}
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add Category</li>
      </ol>
      @include('admin.includes.notify')
     
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-file"></i>Add Category</h2>
				<h2 style="float: right;"><i class="fa fa-file"></i><a href="{{route('category.index')}}">View All Category</a></h2>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" class="form-control" name="category" placeholder="Category" required="">
					</div>
				</div>
				
			</div>
			<!-- /row-->
			<!-- /row-->
		</div>
		<!-- /box_general-->
		
		<p><button type="submit" name="addCategory" class="btn_1 medium">Save</button></p>
	  </div>
	  <!-- /.container-fluid-->
   </form>
   	</div>
    <!-- /.container-wrapper-->
    
@stop
