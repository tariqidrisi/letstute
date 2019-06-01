@extends('admin.layouts.app')
@section('content')
  <!-- /Navigation-->
  <div class="content-wrapper">
  	<form  method="POST" action="{{route('course.store')}}">
  		{{ csrf_field() }}
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add course</li>
      </ol>
      @include('admin.includes.notify')
     
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-file"></i>Add course</h2>
				<h2 style="float: right;"><i class="fa fa-file"></i><a href="{{route('course.index')}}">View All Course</a></h2>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" class="form-control" name="course" placeholder="Course" required="">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<input type="number" class="form-control" name="price" placeholder="Price" required="">
					</div>
				</div>
				
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="form-group">
						<textarea class="form-control" rows="8" name="description" placeholder="Description" required=""></textarea>
					</div>
				</div>
				
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<input type="text" class="form-control" name="duration" placeholder="Duration" required="" />
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<input type="number" class="form-control" name="likes" placeholder="Likes" required="" />
					</div>
				</div>
				
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<select class="form-control" name="category_id" style="height: 45px">
							<option value="">Please Select Category</option>
							@foreach($data['categories'] as $category)
								<option value="{{ $category->id }}">{{ $category->name }}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<select class="form-control" name="class_id" style="height: 45px">
							<option value="">Please Select Class</option>
							@foreach($data['classes'] as $class)
								<option value="{{ $class->id }}">{{ $class->name }}</option>
							@endforeach
						</select>
					</div>
				</div>
				
			</div>
			<!-- /row-->
			<!-- /row-->
		</div>
		<!-- /box_general-->
		
		<p><button type="submit" name="addcourse" class="btn_1 medium">Save</button></p>
	  </div>
	  <!-- /.container-fluid-->
   </form>
   	</div>
    <!-- /.container-wrapper-->
    
@stop
