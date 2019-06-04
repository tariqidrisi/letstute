
@foreach($courses as $course)
<!-- /box_grid -->
<div class="col-md-6">
   <div class="box_grid wow">
      <figure class="block-reveal">
         <div class="block-horizzontal"></div>
         <a href="#0" class="wish_bt"></a>
         <a href="{{route('courseDetail', $course->id)}}"><img src="http://via.placeholder.com/800x533/ccc/fff/course__list_2.jpg" class="img-fluid" alt=""></a>
         <div class="price">${{ $course->price }}</div>
         <div class="preview"><span>Preview course</span></div>
      </figure>
      <div class="wrapper">
         <small>Category</small>
         <h3>{{ $course->description }}</h3>
         <p>{{ $course->description }}</p>
         <div class="rating"><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i><i class="icon_star"></i> <small>(145)</small></div>
      </div>
      <ul>
         <li><i class="icon_clock_alt"></i> {{ $course->duration }}</li>
         <li><i class="icon_like"></i> 890</li>
         <li><a href="course-detail.html">Enroll now</a></li>
      </ul>
   </div>
</div>
@endforeach