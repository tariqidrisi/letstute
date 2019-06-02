@extends('layouts.app')
@section('content')
<main>
   <section class="hero_single home2">
      <div class="wrapper">
         <div class="container">
            <div class="bannertext">
               <h3>A new, better and easy way to learn</h3>
               <p>Anytime! Anywhere!</p>
               <div class="callto_action">
                  <button type="button" class="btn_1 watch_btn">Watch Demo <i class="ti-control-play"></i></button>
                  <button type="button" class="btn_1">Get Started</button>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- /hero_single -->
   <div class="features clearfix">
      <div class="container">
         <h3>We help you Learn in 3 easy steps</h3>
         <ul>
            <li>
               <!-- <i class="pe-7s-album"></i> -->
               <div class="step-img">
                  <img src="img/step01.png" alt="">
               </div>
               <!-- <h4>WATCH Engaging Video</h4> -->
               <span>Video which explains concept in <span>interactive and intersting way</span> </span>
            </li>
            <li>
               <!-- <i class="pe-7s-unlock"></i> -->
               <div class="step-img">
                  <img src="img/step02.png" alt="">
               </div>
               <!-- <h4>FREE UNLIMITED PRACTICE</h4> -->
               <span>Ask doubts and practice to perfection</span>
            </li>
            <li>
               <!-- <i class="pe-7s-note2"></i> -->
               <div class="step-img">
                  <img src="img/step03.png" alt="">
               </div>
               <!-- <h4>FREE TEST& ANALYSIS</h4> -->
               <span>Take test and track your <span>progress report</span> </span>
            </li>
         </ul>
      </div>
   </div>
   <!-- /features -->
   <div class="container margin_120_0">
      <div class="main_title_2">
         <span><em></em></span>
         <h2>Choose your Learning Package</h2>
         <!-- <p>This Learning package includes</p> -->
         <!-- <div class="highlight_list container">
            <ul class="text-center owl-carousel owl-theme" id="highlight_list">
              <li>
                <div class="tickimage">
                  <i class="pe-7s-check"></i>
                </div>
                <p>Videos on all topics and chapters</p>
              </li>
              <li>
                <div class="tickimage">
                  <i class="pe-7s-check"></i>
                </div>
                <p>Free Unlimited Practice to perfection</p>
              </li>
              <li>
                <div class="tickimage">
                  <i class="pe-7s-check"></i>
                </div>
                <p>Free Tests & Analysis</p>
              </li>
              <li>
                <div class="tickimage">
                  <i class="pe-7s-check"></i>
                </div>
                <p>Previous Year Question Papers</p>
              </li>
              <li>
                <div class="tickimage">
                  <i class="pe-7s-check"></i>
                </div>
                <p>Access to our library of over 5 lakh questions</p>
              </li>
              <li>
                <div class="tickimage">
                  <i class="pe-7s-check"></i>
                </div>
                <p>Access on Laptop, Tablet and Smartphone</p>
              </li>
              <li>
                <div class="tickimage">
                  <i class="pe-7s-check"></i>
                </div>
                <p>Certificate of Completion</p>
              </li>
            </ul>
            </div> -->
      </div>
      <div class="row">
         <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
            <a href="#0" class="grid_item">
               <figure class="block-reveal tariq">
                  <div class="block-horizzontal"></div>
                  <img src="{{ URL::asset('img/course_1.jpg') }}" class="img-fluid" alt="">
                  <div class="info">
                     <small><i class="ti-layers"></i>15 Programmes</small>
                     <h3>Mathematics</h3>
                  </div>
               </figure>
            </a>
         </div>
         <!-- /grid_item -->
         <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
            <a href="#0" class="grid_item">
               <figure class="block-reveal">
                  <div class="block-horizzontal"></div>
                  <img src="{{ asset('img/course_2.jpg') }}" class="img-fluid" alt="">
                  <div class="info">
                     <small><i class="ti-layers"></i>10 Programmes</small>
                     <h3>Science</h3>
                  </div>
               </figure>
            </a>
         </div>
         <!-- /grid_item -->
         <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
            <a href="#0" class="grid_item">
               <figure class="block-reveal">
                  <div class="block-horizzontal"></div>
                  <img src="img/course_3.jpg" class="img-fluid" alt="">
                  <div class="info">
                     <small><i class="ti-layers"></i>20 Programmes</small>
                     <h3>Mathematic & Science</h3>
                  </div>
               </figure>
            </a>
         </div>
         <!-- /grid_item -->
         <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
            <a href="#0" class="grid_item">
               <figure class="block-reveal">
                  <div class="block-horizzontal"></div>
                  <img src="img/course_4.jpg" class="img-fluid" alt="">
                  <div class="info">
                     <small><i class="ti-layers"></i>23 Programmes</small>
                     <h3>Bookkeeping & Accounting</h3>
                  </div>
               </figure>
            </a>
         </div>
         <!-- /grid_item -->
         <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
            <a href="#0" class="grid_item">
               <figure class="block-reveal">
                  <div class="block-horizzontal"></div>
                  <img src="img/course_5.jpg" class="img-fluid" alt="">
                  <div class="info">
                     <small><i class="ti-layers"></i>30 Programmes</small>
                     <h3>EVS</h3>
                  </div>
               </figure>
            </a>
         </div>
         <!-- /grid_item -->
         <div class="col-lg-4 col-md-6 wow" data-wow-offset="150">
            <a href="#0" class="grid_item">
               <figure class="block-reveal">
                  <div class="block-horizzontal"></div>
                  <img src="img/course_1.jpg" class="img-fluid" alt="">
                  <div class="info">
                     <small><i class="ti-layers"></i>28 Programmes</small>
                     <h3>Value Education</h3>
                  </div>
               </figure>
            </a>
         </div>
         <!-- /grid_item -->
      </div>
      <!-- /carousel -->
      <hr>
   </div>
   <!-- /container -->
   <div class="container-fluid margin_30_95">
      <div class="main_title_2">
         <span><em></em></span>
         <h2>Letstute Popular Courses</h2>
         <p>Courses taught by LetsTute Make it Easy</p>
      </div>
      <div id="reccomended" class="owl-carousel owl-theme">
         <div class="item">
            <div class="box_grid course-card">
               <figure>
                  <a href="course-detail">
                     <div class="preview"><span>Preview course</span></div>
                     <img src="img/course__list_1.jpg" class="img-fluid" alt="">
                  </a>
                  <!-- <div class="price">$39</div> -->
               </figure>
               <div class="wrapper">
                  <small>Category</small>
                  <h3>Persius delenit has cu</h3>
                  <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                  <div class="price-wrap">
                     <div class="org-price">
                        Rs.2,000
                     </div>
                     <div class="org-percent">
                        Save 75%
                     </div>
                     <div class="disc-price">
                        Rs.500
                     </div>
                  </div>
               </div>
               <ul>
                  <li><a href="https://www.youtube.com/watch?v=yIbi9rAMcLM" class="video course-detail">Watch Demo</a></li>
                  <li><a href="course-detail">Enroll now</a></li>
               </ul>
            </div>
         </div>
         <!-- /item -->
         <div class="item">
            <div class="box_grid course-card">
               <figure>
                  <a href="course-detail"><img src="img/course__list_2.jpg" class="img-fluid" alt=""></a>
                  <!-- <div class="price">$45</div> -->
                  <div class="preview"><span>Preview course</span></div>
               </figure>
               <div class="wrapper">
                  <small>Category</small>
                  <h3>Persius delenit has cu</h3>
                  <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                  <div class="price-wrap">
                     <div class="org-price">
                        Rs.2,000
                     </div>
                     <div class="org-percent">
                        Save 75%
                     </div>
                     <div class="disc-price">
                        Rs.500
                     </div>
                  </div>
               </div>
               <ul>
                  <li><a href="https://www.youtube.com/watch?v=yIbi9rAMcLM" class="video course-detail">Watch Demo</a></li>
                  <li><a href="course-detail">Enroll now</a></li>
               </ul>
            </div>
         </div>
         <!-- /item -->
         <div class="item">
            <div class="box_grid course-card">
               <figure>
                  <a href="course-detail"><img src="img/course__list_3.jpg" class="img-fluid" alt=""></a>
                  <!-- <div class="price">$54</div> -->
                  <div class="preview"><span>Preview course</span></div>
               </figure>
               <div class="wrapper">
                  <small>Category</small>
                  <h3>Persius delenit has cu</h3>
                  <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                  <div class="price-wrap">
                     <div class="org-price">
                        Rs.2,000
                     </div>
                     <div class="org-percent">
                        Save 75%
                     </div>
                     <div class="disc-price">
                        Rs.500
                     </div>
                  </div>
               </div>
               <ul>
                  <li><a href="https://www.youtube.com/watch?v=yIbi9rAMcLM" class="video course-detail">Watch Demo</a></li>
                  <li><a href="course-detail">Enroll now</a></li>
               </ul>
            </div>
         </div>
         <!-- /item -->
         <div class="item">
            <div class="box_grid course-card">
               <figure>
                  <a href="course-detail"><img src="img/course__list_4.jpg" class="img-fluid" alt=""></a>
                  <!-- <div class="price">$27</div> -->
                  <div class="preview"><span>Preview course</span></div>
               </figure>
               <div class="wrapper">
                  <small>Category</small>
                  <h3>Persius delenit has cu</h3>
                  <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                  <div class="price-wrap">
                     <div class="org-price">
                        Rs.2,000
                     </div>
                     <div class="org-percent">
                        Save 75%
                     </div>
                     <div class="disc-price">
                        Rs.500
                     </div>
                  </div>
               </div>
               <ul>
                  <li><a href="https://www.youtube.com/watch?v=yIbi9rAMcLM" class="video course-detail">Watch Demo</a></li>
                  <li><a href="course-detail">Enroll now</a></li>
               </ul>
            </div>
         </div>
         <!-- /item -->
         <div class="item">
            <div class="box_grid course-card">
               <figure>
                  <a href="course-detail"><img src="img/course__list_5.jpg" class="img-fluid" alt=""></a>
                  <!-- <div class="price">$35</div> -->
                  <div class="preview"><span>Preview course</span></div>
               </figure>
               <div class="wrapper">
                  <small>Category</small>
                  <h3>Persius delenit has cu</h3>
                  <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                  <div class="price-wrap">
                     <div class="org-price">
                        Rs.2,000
                     </div>
                     <div class="org-percent">
                        Save 75%
                     </div>
                     <div class="disc-price">
                        Rs.500
                     </div>
                  </div>
               </div>
               <ul>
                  <li><a href="https://www.youtube.com/watch?v=yIbi9rAMcLM" class="video course-detail">Watch Demo</a></li>
                  <li><a href="course-detail">Enroll now</a></li>
               </ul>
            </div>
         </div>
         <!-- /item -->
         <div class="item">
            <div class="box_grid course-card">
               <figure>
                  <a href="course-detail"><img src="img/course__list_6.jpg" class="img-fluid" alt=""></a>
                  <!-- <div class="price">$54</div> -->
                  <div class="preview"><span>Preview course</span></div>
               </figure>
               <div class="wrapper">
                  <small>Category</small>
                  <h3>Persius delenit has cu</h3>
                  <p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
                  <div class="price-wrap">
                     <div class="org-price">
                        Rs.2,000
                     </div>
                     <div class="org-percent">
                        Save 75%
                     </div>
                     <div class="disc-price">
                        Rs.500
                     </div>
                  </div>
               </div>
               <ul>
                  <li><a href="https://www.youtube.com/watch?v=yIbi9rAMcLM" class="video course-detail">Watch Demo</a></li>
                  <li><a href="course-detail">Enroll now</a></li>
               </ul>
            </div>
         </div>
         <!-- /item -->
      </div>
      <!-- /row -->
   </div>
   <!-- /container -->
   <!-- features video  -->
   <div class="container margin_30_95 feature-video">
      <div class="main_title_2">
         <span><em></em></span>
         <h2>FEATURED VIDEOS</h2>
      </div>
      <div class="switcher">
         <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
               <a class="nav-link active" id="home-tab" data-toggle="tab" href="#maths" role="tab" aria-controls="maths" aria-selected="true">MatheMaticca</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" id="profile-tab" data-toggle="tab" href="#accounts" role="tab" aria-controls="accounts" aria-selected="false">Accountancy</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" id="contact-tab" data-toggle="tab" href="#science" role="tab" aria-controls="science" aria-selected="false">Science</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" id="contact-tab" data-toggle="tab" href="#english" role="tab" aria-controls="english" aria-selected="false">English</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" id="contact-tab" data-toggle="tab" href="#evs" role="tab" aria-controls="evs" aria-selected="false">EVS</a>
            </li>
         </ul>
      </div>
      <div class="tabContent">
         <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="maths" role="tabpanel" aria-labelledby="home-tab">
               <div class="grid">
                  <ul class="magnific-gallery">
                     <li>
                        <figure>
                           <img src="img/video/video01.jpg" alt="">
                           <figcaption>
                              <div class="caption-content">
                                 <a href="https://www.youtube.com/watch?v=yIbi9rAMcLM" class="video" title="Video Vimeo">
                                    <i class="pe-7s-film"></i>
                                    <p>Your caption</p>
                                 </a>
                              </div>
                           </figcaption>
                        </figure>
                     </li>
                     <li>
                        <figure>
                           <img src="img/video/video02.jpg" alt="">
                           <figcaption>
                              <div class="caption-content">
                                 <a href="https://www.youtube.com/watch?v=atVLwWUaPvY" class="video" title="Video Youtube">
                                    <i class="pe-7s-film"></i>
                                    <p>Your caption</p>
                                 </a>
                              </div>
                           </figcaption>
                        </figure>
                     </li>
                     <li>
                        <figure>
                           <img src="img/video/video03.jpg" alt="">
                           <figcaption>
                              <div class="caption-content">
                                 <a href="https://www.youtube.com/watch?v=ZxnlidelETc" class="video" title="Video Vimeo">
                                    <i class="pe-7s-film"></i>
                                    <p>Your caption</p>
                                 </a>
                              </div>
                           </figcaption>
                        </figure>
                     </li>
                  </ul>
               </div>
               <div class="ckearfix"></div>
            </div>
            <div class="tab-pane fade" id="accounts" role="tabpanel" aria-labelledby="profile-tab">
               <div class="grid">
                  <ul class="magnific-gallery">
                     <li>
                        <figure>
                           <img src="img/video/video02.jpg" alt="">
                           <figcaption>
                              <div class="caption-content">
                                 <a href="https://www.youtube.com/watch?v=yIbi9rAMcLM" class="video" title="Video Youtube">
                                    <i class="pe-7s-film"></i>
                                    <p>Your caption</p>
                                 </a>
                              </div>
                           </figcaption>
                        </figure>
                     </li>
                     <li>
                        <figure>
                           <img src="img/video/video01.jpg" alt="">
                           <figcaption>
                              <div class="caption-content">
                                 <a href="https://www.youtube.com/watch?v=yIbi9rAMcLM" class="video" title="Video Vimeo">
                                    <i class="pe-7s-film"></i>
                                    <p>Your caption</p>
                                 </a>
                              </div>
                           </figcaption>
                        </figure>
                     </li>
                     <li>
                        <figure>
                           <img src="img/video/video03.jpg" alt="">
                           <figcaption>
                              <div class="caption-content">
                                 <a href="https://www.youtube.com/watch?v=ZxnlidelETc" class="video" title="Video Vimeo">
                                    <i class="pe-7s-film"></i>
                                    <p>Your caption</p>
                                 </a>
                              </div>
                           </figcaption>
                        </figure>
                     </li>
                  </ul>
               </div>
               <div class="ckearfix"></div>
            </div>
            <div class="tab-pane fade" id="science" role="tabpanel" aria-labelledby="contact-tab">
               <div class="grid">
                  <ul class="magnific-gallery">
                     <li>
                        <figure>
                           <img src="img/video/video01.jpg" alt="">
                           <figcaption>
                              <div class="caption-content">
                                 <a href="https://www.youtube.com/watch?v=yIbi9rAMcLM" class="video" title="Video Vimeo">
                                    <i class="pe-7s-film"></i>
                                    <p>Your caption</p>
                                 </a>
                              </div>
                           </figcaption>
                        </figure>
                     </li>
                     <li>
                        <figure>
                           <img src="img/video/video02.jpg" alt="">
                           <figcaption>
                              <div class="caption-content">
                                 <a href="https://www.youtube.com/watch?v=yIbi9rAMcLM" class="video" title="Video Youtube">
                                    <i class="pe-7s-film"></i>
                                    <p>Your caption</p>
                                 </a>
                              </div>
                           </figcaption>
                        </figure>
                     </li>
                     <li>
                        <figure>
                           <img src="img/video/video03.jpg" alt="">
                           <figcaption>
                              <div class="caption-content">
                                 <a href="https://www.youtube.com/watch?v=yIbi9rAMcLM" class="video" title="Video Vimeo">
                                    <i class="pe-7s-film"></i>
                                    <p>Your caption</p>
                                 </a>
                              </div>
                           </figcaption>
                        </figure>
                     </li>
                  </ul>
               </div>
               <div class="ckearfix"></div>
            </div>
            <div class="tab-pane fade" id="english" role="tabpanel" aria-labelledby="contact-tab">
               <div class="grid">
                  <ul class="magnific-gallery">
                     <li>
                        <figure>
                           <img src="img/video/video02.jpg" alt="">
                           <figcaption>
                              <div class="caption-content">
                                 <a href="https://www.youtube.com/watch?v=yIbi9rAMcLM" class="video" title="Video Youtube">
                                    <i class="pe-7s-film"></i>
                                    <p>Your caption</p>
                                 </a>
                              </div>
                           </figcaption>
                        </figure>
                     </li>
                     <li>
                        <figure>
                           <img src="img/video/video01.jpg" alt="">
                           <figcaption>
                              <div class="caption-content">
                                 <a href="https://www.youtube.com/watch?v=yIbi9rAMcLM" class="video" title="Video Vimeo">
                                    <i class="pe-7s-film"></i>
                                    <p>Your caption</p>
                                 </a>
                              </div>
                           </figcaption>
                        </figure>
                     </li>
                     <li>
                        <figure>
                           <img src="img/video/video03.jpg" alt="">
                           <figcaption>
                              <div class="caption-content">
                                 <a href="https://www.youtube.com/watch?v=ZxnlidelETc" class="video" title="Video Vimeo">
                                    <i class="pe-7s-film"></i>
                                    <p>Your caption</p>
                                 </a>
                              </div>
                           </figcaption>
                        </figure>
                     </li>
                  </ul>
               </div>
               <div class="ckearfix"></div>
            </div>
            <div class="tab-pane fade" id="evs" role="tabpanel" aria-labelledby="contact-tab">
               <div class="grid">
                  <ul class="magnific-gallery">
                     <li>
                        <figure>
                           <img src="img/video/video02.jpg" alt="">
                           <figcaption>
                              <div class="caption-content">
                                 <a href="https://www.youtube.com/watch?v=yIbi9rAMcLM" class="video" title="Video Youtube">
                                    <i class="pe-7s-film"></i>
                                    <p>Your caption</p>
                                 </a>
                              </div>
                           </figcaption>
                        </figure>
                     </li>
                     <li>
                        <figure>
                           <img src="img/video/video01.jpg" alt="">
                           <figcaption>
                              <div class="caption-content">
                                 <a href="https://www.youtube.com/watch?v=yIbi9rAMcLM" class="video" title="Video Vimeo">
                                    <i class="pe-7s-film"></i>
                                    <p>Your caption</p>
                                 </a>
                              </div>
                           </figcaption>
                        </figure>
                     </li>
                     <li>
                        <figure>
                           <img src="img/video/video03.jpg" alt="">
                           <figcaption>
                              <div class="caption-content">
                                 <a href="https://www.youtube.com/watch?v=ZxnlidelETc" class="video" title="Video Vimeo">
                                    <i class="pe-7s-film"></i>
                                    <p>Your caption</p>
                                 </a>
                              </div>
                           </figcaption>
                        </figure>
                     </li>
                  </ul>
               </div>
               <div class="ckearfix"></div>
            </div>
         </div>
      </div>
      <!-- /row -->
   </div>
   <!-- features video  -->
   <div class="bg_color_1 testimonails">
      <div class="container margin_120_95">
         <div class="owl-carousel owl-theme" id="testimonails">
            <div class="testimonails-box">
               <p>Hi LetsTute...i really appreciate you because you have helped me a lot in my examinations and you will in my Karnataka board exams if you can please keep it up and help students who fear from math’s like me.</p>
               <span class="testimonails-name">Asif Suhaib</span>
               <span class="testimonails-details">Student, School Name, CBSE 12th <span>Mumbai</span> </span>
               <img class="testimonails-img" src="img/profile.png" alt="profile"/>
            </div>
            <div class="testimonails-box">
               <p>Hi LetsTute...i really appreciate you because you have helped me a lot in my examinations and you will in my Karnataka board exams if you can please keep it up and help students who fear from math’s like me.</p>
               <span class="testimonails-name">Asif Suhaib</span>
               <span class="testimonails-details">Student, School Name, CBSE 12th <span>Mumbai</span> </span>
               <img class="testimonails-img" src="img/profile.png" alt="profile"/>
            </div>
            <div class="testimonails-box">
               <p>Hi LetsTute...i really appreciate you because you have helped me a lot in my examinations and you will in my Karnataka board exams if you can please keep it up and help students who fear from math’s like me.</p>
               <span class="testimonails-name">Asif Suhaib</span>
               <span class="testimonails-details">Student, School Name, CBSE 12th <span>Mumbai</span> </span>
               <img class="testimonails-img" src="img/profile.png" alt="profile"/>
            </div>
         </div>
      </div>
      <!-- /container -->
   </div>
   <!-- /bg_color_1 -->
   <div class="partners">
      <div class="container margin_60">
         <div class="main_title_2">
            <span><em></em></span>
            <h2>Our Partners</h2>
         </div>
         <div class="owl-carousel owl-theme" id="ourpartners">
            <div class="item">
               <img src="img/partners/sharekhan.png"  alt="Tick"/>
            </div>
            <div class="item">
               <img src="img/partners/vimal.png"  alt="Tick"/>
            </div>
            <div class="item">
               <img src="img/partners/svf.png"  alt="Tick"/>
            </div>
            <div class="item">
               <img src="img/partners/aws.png"  alt="Tick"/>
            </div>
            <div class="item">
               <img src="img/partners/flipkart.png"  alt="Tick"/>
            </div>
            <div class="item">
               <img src="img/partners/udemy.png"  alt="Tick"/>
            </div>
            <div class="item">
               <img src="img/partners/bo.png"  alt="Tick"/>
            </div>
         </div>
      </div>
   </div>
</main>
<!-- /main -->
@stop