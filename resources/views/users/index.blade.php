@extends('layouts.main')

@section('main-content')

    <!--
        Welcome Slider
        ==================================== -->

    <section class="hero-area shadow-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="block ">
                        <h1 class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".3s">Routing You <br> To <span
                                class="success-custom">Success</span></h1>
                        {{-- <p class="wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".5s">Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Nulla, ad rerum repellat. Sequi, labore, illo. Ducimus voluptates quidem obcaecati, ad.
                    </p> --}}
                        <ul class="list-inline wow fadeInUp" data-wow-duration=".5s" data-wow-delay=".7s">
                            <li class="list-inline-item">
                                <a data-scroll href="#service-2" class="btn btn-main">Explore Us</a>
                            </li>
                            <li class="list-inline-item">
                                <a data-scroll a href="tel:+91 9747 51 2223"
                                    class="btn btn-transparent btn-outline-dark">Call Now</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Start courses area-->

<user-index-courses> </user-index-courses>

<!-- end courses area-->


<enquiry-form> </enquiry-form>

         





    <!-- Start category Section
          ==================================== -->


<user-index-categories> </user-index-categories>


   <!-- category Section ends 
          ==================================== -->

    <!--
        Start About Section
        ==================================== -->
    <section class="service-2 section">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <!-- section title -->
                    <div class="title text-center">
                        <h2>Why Network Academy</h2>



                        <p class="p-100"><b>Network Academy Mankavu, Calicut</b> is a premier educational
                            institution with an innovative effort keeping in view of this new demand of the hi-tech new age,
                            delivering information and communication technology skills in its precise and relevant formats.
                            Network Academy???s proven track of quality end academic training program has been noted for its
                            highly-qualified faculty, career oriented training system and the best infrastructure in the
                            field of computer networking and software imparting premium training in the areas of Inter
                            networking Technologies, Operating Systems, Web Servers and Security/Firewalls.
                            Our professional training will help students to strengthen their soft skills and interviewing
                            skills. Our courses enable students to get world-recognized certifications from leading global
                            players like Cisco, Microsoft, and Red hat.</p>

                        <div class="border"></div>
                    </div>
                    <!-- /section title -->
                </div>


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->

    <!--
        Start About Section
        ==================================== -->
    <section class="about-2 section" id="about">
        <div class="container">
            <div class="row">

                <!-- section title -->
                <div class="col-12">
                    <div class="title text-center">
                        <h2>Our Speciality</h2>

                        <div class="border"></div>
                    </div>
                </div>
                <!-- /section title -->
                <div class="col-md-6 service-2">
                    <div class="row text-center">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="service-item">
                                <i class="fas fa-book-reader"></i>
                                <h5>Curriculam</h5>
                                <p></p>
                            </div>
                        </div><!-- END COL -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="service-item">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <h5>Training</h5>
                                <p></p>
                            </div>
                        </div><!-- END COL -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="service-item">
                                <i class="fas fa-hands-helping"></i>
                                <h5>Support</h5>
                                <p></p>
                            </div>
                        </div><!-- END COL -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="service-item">
                                <i class="fas fa-user-graduate"></i>
                                <h5>Placement</h5>
                                <p></p>
                            </div>
                        </div><!-- END COL -->
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="checklist home-checklist">
                        <li>15 Years of Experience in IT Networking Field.</li>
                        <li>Experienced Faculties</li>
                        <li>Wi-Fi Configured Lab</li>
                        <li>100% Job Guarantee*</li>
                        <li>International Exam Center-Pearson Vue</li>
                        <li>Part Time Job Facility</li>
                        <li>On-The Job Training</li>

                    </ul>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->






    <!--
          Start Counter Section
          ==================================== -->

    <!-- Start Testimonial
        =========================================== -->

    <section class="testimonial section" id="testimonial">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- testimonial wrapper -->
                    <div class="testimonial-slider">
                        <!-- testimonial single -->
                        <div class="item text-center">
                            <i class="tf-ion-chatbubbles"></i>
                            <!-- client info -->
                            <div class="client-details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos
                                    earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates
                                    alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
                            </div>
                            <!-- /client info -->
                            <!-- client photo -->
                            <div class="client-thumb">
                                <img src="images/client-logo/clients-1.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>William Martin</h3>
                                <span>CEO , Company Name</span>
                            </div>
                            <!-- /client photo -->
                        </div>
                        <!-- /testimonial single -->

                        <!-- testimonial single -->
                        <div class="item text-center">
                            <i class="tf-ion-chatbubbles"></i>
                            <!-- client info -->
                            <div class="client-details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos
                                    earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates
                                    alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
                            </div>
                            <!-- /client info -->
                            <!-- client photo -->
                            <div class="client-thumb">
                                <img src="images/client-logo/clients-2.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Emma Harrison</h3>
                                <span>CEO , Company Name</span>
                            </div>
                            <!-- /client photo -->
                        </div>
                        <!-- /testimonial single -->

                        <!-- testimonial single -->
                        <div class="item text-center">
                            <i class="tf-ion-chatbubbles"></i>
                            <!-- client info -->
                            <div class="client-details">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum nulla, soluta dolorum. Eos
                                    earum, magni asperiores, unde corporis labore, enim, voluptatum officiis voluptates
                                    alias natus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, officia.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, quia?</p>
                            </div>
                            <!-- /client info -->
                            <!-- client photo -->
                            <div class="client-thumb">
                                <img src="images/client-logo/clients-3.jpg" class="img-fluid" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Alexander Lucas</h3>
                                <span>CEO , Company Name</span>
                            </div>
                            <!-- /client photo -->
                        </div>
                        <!-- /testimonial single -->
                    </div>
                </div> <!-- end col lg 12 -->
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End Section -->


    <!-- Page Content -->
    {{-- <hr> --}}
    {{-- <div class="container">
    <div class="title text-center pt-5  ">
        <h2>Placements</h2>
        <div class="border"></div>
    </div>
    <div class="row pt-2">

      <!-- Team Member 1 -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
          <img src="https://source.unsplash.com/TMgQMXoglsM/500x350" class="card-img-top" alt="...">
          <div class="card-body text-center" style="min-height: 200px">
            <h5 class="card-title mb-0">Team Member</h5>
            <div class="card-text text-black-50">Web Developer</div>
            <div class="card-text text-black-50">Web Developer</div>
          </div>
        </div>
      </div>
      <!-- Team Member 2 -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
          <img src="https://source.unsplash.com/9UVmlIb0wJU/500x350" class="card-img-top" alt="...">
          <div class="card-body text-center" style="min-height: 200px">
            <h5 class="card-title mb-0">Team Member</h5>
            <div class="card-text text-black-50">Web Developer</div>
            <div class="card-text text-black-50">Web Developer</div>
          </div>
        </div>
      </div>
      <!-- Team Member 3 -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
          <img src="https://source.unsplash.com/sNut2MqSmds/500x350" class="card-img-top" alt="...">
          <div class="card-body text-center" style="min-height: 200px">
            <h5 class="card-title mb-0">Team Member</h5>
            <div class="card-text text-black-50"><p class="text-justify">Web developer at tcsWeb developer at tcsWeb developer at tcsWeb developer at tcs salary 2.5 lc per annum</p></div>
          </div>
        </div>
      </div>
      <!-- Team Member 4 -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 shadow">
          <img src="https://source.unsplash.com/7u5mwbu7qLg/500x350" class="card-img-top" alt="...">
          <div class="card-body text-center" style="min-height: 200px">
            <h5 class="card-title mb-0">Team Member</h5>
            <div class="card-text text-black-50">Web Developer</div>
  <div class="card-text text-black-50">Web Developer</div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row --> --}}

    <!--
          Start Blog Section
          =========================================== -->



    <section class="counter-wrapper section-sm mb-5">
        <div class="container">
            <div class="row">
                <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                    <div class="carousel-inner w-100" role="listbox">
                        <div class="carousel-item row no-gutters active mb-5">
                            <div class="col-3 float-left"><img class="img-fluid" src="images/BrandSlides/cisco.png"
                                    width="150px"></div>
                            <div class="col-3 float-left"><img class="img-fluid" src="images/BrandSlides/redhat.png"
                                    width="200px"></div>
                            <div class="col-3 float-left"><img class="img-fluid" src="images/BrandSlides/vm.png"
                                    width="200px"></div>
                            <div class="col-3 float-left"><img class="img-fluid" src="images/BrandSlides/sun.png"
                                    width="160px"></div>

                        </div>
                        <div class="carousel-item row no-gutters mb-5">
                            <div class="col-3 float-left"><img class="img-fluid" src="images/BrandSlides/citrix.png"
                                    width="160px"></div>
                            <div class="col-3 float-left"><img class="img-fluid" src="images/BrandSlides/micro.png"
                                    width="180px"></div>
                            <div class="col-3 float-left"><img class="img-fluid" src="images/BrandSlides/redhat.png"
                                    width="200px"></div>
                            <div class="col-3 float-left"><img class="img-fluid" src="images/BrandSlides/vm.png"
                                    width="200px"></div>
                        </div>
                    </div>
                    {{-- <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a> --}}
                </div>

            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- end section -->

@endsection
