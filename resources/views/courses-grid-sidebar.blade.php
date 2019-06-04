@extends('layouts.app')
@section('content')
<?php
$categories = DB::select('select id, name FROM categories');
$classes = DB::select('select id, name FROM classes');
?>
<main>
   <section id="hero_in" class="courses">
      <div class="wrapper">
         <div class="container">
            <h1 class="fadeInUp"><span></span>Online courses</h1>
         </div>
      </div>
   </section>
   <!--/hero_in-->
   <div class="filters_listing sticky_horizontal">
      <div class="container">
         <ul class="clearfix">
            <!-- <li>
               <div class="switch-field">
                  <input type="radio" id="all" name="listing_filter" value="all" checked>
                  <label for="all">All</label>
                  <input type="radio" id="popular" name="listing_filter" value="popular">
                  <label for="popular">Popular</label>
                  <input type="radio" id="latest" name="listing_filter" value="latest">
                  <label for="latest">Latest</label>
               </div>
            </li> -->
            <li>
               <div class="layout_view">
                  <a href="courses-grid" class="active"><i class="icon-th"></i></a>
                  <a href="courses-list"><i class="icon-th-list"></i></a>
               </div>
            </li>
            <li>
               <!-- <select name="orderby" class="selectbox">
                  <option value="">Category</option>
                  @foreach($categories as $category)
                  	<option value="{{$category->id}}">{{$category->name}}</option>
                  @endforeach                  
               </select> -->
            </li>
         </ul>
      </div>
      <!-- /container -->
   </div>
   <!-- /filters -->
   <div class="container margin_60_35">
      <div class="row">
         <aside class="col-lg-3" id="sidebar">
            <div id="filters_col">
               <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters </a>
               <div class="collapse show" id="collapseFilters">
                  <div class="filter_type">
                     <h6>Category</h6>
                     <ul>
                     	<li>
                           <label>
                           <input type="checkbox" name="all" class="checkAll" style="opacity: 4;"> All <small>(945)</small>
                           </label>
                        </li>
                     	@foreach($categories as $category)
                        <li>
                           <label>
                           <input type="checkbox" name="category[]" value="{{ $category->id }}" class="checkbox" style="opacity: 4;">
                              {{$category->name}} <small>(945)</small>
                           </label>
                        </li>
                        @endforeach
                        
                     </ul>
                  </div>
                  
               </div>
               <!--/collapse -->
            </div>
            <!--/filters col-->
         </aside>
         <!-- /aside -->
         <div class="col-lg-9">
            <div class="row" id="filterCategory">
            	@include("partials.courses-list")
               <!-- /box_grid -->
            </div>
            <!-- /row -->
            <p class="text-center"><a href="#0" class="btn_1 rounded add_top_30">Load more</a></p>
         </div>
         <!-- /col -->
      </div>
      <!-- /row -->
   </div>
   <!-- /container -->
   <div class="bg_color_1">
      <div class="container margin_60_35">
         <div class="row">
            <div class="col-md-4">
               <a href="#0" class="boxed_list">
                  <i class="pe-7s-help2"></i>
                  <h4>Need Help? Contact us</h4>
                  <p>Cum appareat maiestatis interpretaris et, et sit.</p>
               </a>
            </div>
            <div class="col-md-4">
               <a href="#0" class="boxed_list">
                  <i class="pe-7s-wallet"></i>
                  <h4>Payments and Refunds</h4>
                  <p>Qui ea nemore eruditi, magna prima possit eu mei.</p>
               </a>
            </div>
            <div class="col-md-4">
               <a href="#0" class="boxed_list">
                  <i class="pe-7s-note2"></i>
                  <h4>Quality Standards</h4>
                  <p>Hinc vituperata sed ut, pro laudem nonumes ex.</p>
               </a>
            </div>
         </div>
         <!-- /row -->
      </div>
      <!-- /container -->
   </div>
   <!-- /bg_color_1 -->
</main>
<!--/main-->
@section('scripts')
<script type="text/javascript">
	
	// filter category 
	$(".checkbox").click(function(){		
	
		var filter = [];
        $(':checkbox:checked').each(function(i){
          filter[i] = $(this).val();
        });

        $.ajaxSetup({
		    headers: {
		        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		    }
		});
        $.post("{{route('filter')}}", {filter:filter}, function(data){
        	$("#filterCategory").html(data);
        });
        
	});

	//checkall
	$(".checkAll").change(function(){
	    $('.checkbox').trigger('click');
	    $('input:checkbox').not(this).prop('checked', this.checked);
	});
</script>
 @stop
