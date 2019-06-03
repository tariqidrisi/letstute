<header class="header menu_2">
   <div id="preloader">
      <div data-loader="circle-side"></div>
   </div>
   <!-- /Preload -->
   <div id="logo">
      <a href="index"><img src="img/logo.png" width="149" height="42" data-retina="true" alt=""></a>
   </div>
   <ul id="top_menu">
      <li><a href="cart-1" class="cart">Cart</a></li>
      <li><a href="#0" class="search-overlay-menu-btn">Search</a></li>
      <li><a href="login" class="login">Login</a></li>
      <li class="hidden_tablet"><a href="#0" class="btn_1 rounded">BUY COURSE</a></li>
   </ul>
   <!-- /top_menu -->
   <a href="#menu" class="btn_mobile">
      <div class="hamburger hamburger--spin" id="hamburger">
         <div class="hamburger-box">
            <div class="hamburger-inner"></div>
         </div>
      </div>
   </a>
   <nav id="menu" class="main-menu">
      <ul>
         <li><span><a href="index">Home</a></span></li>
         <li>
            <span><a href="#0">Courses</a></span>
            <ul>
               <?php
                  $categories = DB::select('select id, name FROM categories');
                  $classes = DB::select('select id, name FROM classes');
               ?>
               @foreach($categories as $category)
                  <li><a href="{{route('filterCategory', $category->id)}}">{{$category->name}}</a></li>
               @endforeach
            </ul>
         </li>
         <li>
            <span><a href="#0">Select CLASS</a></span>
            <ul>
               @foreach($classes as $class)
                  <li><a href="{{route('filterClass', $class->id)}}">{{$class->name}}</a></li>
               @endforeach
            </ul>
         </li>
         <li><span><a href="#0">Exam Help & TIPS</a></span></li>
      </ul>
   </nav>
   <!-- Search Menu -->
   <div class="search-overlay-menu">
      <span class="search-overlay-close"><span class="closebt"><i class="ti-close"></i></span></span>
      <form role="search" id="searchform" method="get">
         <input value="" name="q" type="search" placeholder="Search..." />
         <button type="submit"><i class="icon_search"></i>
         </button>
      </form>
   </div>
   <!-- End Search Menu -->
</header>
<!-- /header -->