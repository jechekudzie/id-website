@extends('layouts.website')

@section('content')


<style>
  
 
/* Desktop and Tablet Layout */
.slider_content_img .row {
  display: flex;
  flex-wrap: wrap; /* Ensure wrapping of columns */
  gap: 10px; /* Add spacing between images */
  justify-content: center; /* Center the grid */
}

.slider_content_img .col-5,
.slider_content_img .col-7 {
  flex: 1 1 48%; /* Each image takes approximately half of the row */
  max-width: 48%; /* Prevent exceeding 50% */
}

.slider_img img {
  width: 100%; /* Responsive images */
  height: auto; /* Maintain aspect ratio */
  object-fit: cover; /* Ensure proper image fit */
}

/* Mobile Layout */
@media (max-width: 768px) {
  .slider_content_img .row {
    display: flex;
    flex-direction: row; /* Maintain a single-row layout for images */
    flex-wrap: wrap; /* Wrap images to new lines as needed */
    gap: 10px; /* Add spacing */
  }

  .slider_content_img .col-5,
  .slider_content_img .col-7 {
    flex: 1 1 calc(50% - 10px); /* Each image takes 50% of the row with spacing */
    max-width: calc(50% - 10px); /* Avoid exceeding 50% */
  }

  
}



</style>
<div class="home_slider overflow-hidden position-relative" data-delay="6000">
  <!-- ======================================================================= -->
  <!--                            SLIDER ITEM START                            -->
  <!-- ======================================================================= -->
  <div class="slider_item is-active">
    <div class="container my-12">
      <div class="row align-items-center">
        <div class="col-lg-6 position-relative z-2">
          <div class="slider_content_text">
            <p class="slider_subtitle text-white">We Tell Great Stories</p>
            <!-- slider_subtitle -->

            <h1 style="color: #ea202e;" class="slider_title">
              <span class="text-wrapper">
                <span class="letters">
                  Stories connect us. Great ones change how we see the world.
                </span>
                <!-- /.letters -->
              </span>
              <!-- text-wrapper -->
            </h1>
            <!-- /.slider_title -->

            <p class="slider_text text-white">
              Intentionally Daring is here to help you share yours.
            </p>
            <!-- /.slider_text -->
            <div class="slider_btn_box">
              <a href="#works" class="slider_btn rdn_btn go_btn">
                <span class="btn_top">
                  Explore Our Work
                  <i class="ms-2 ph ph-arrow-right"></i>
                </span>
                <!-- /.btn_top -->
                <span class="btn_bottom">
                  Explore Our Work
                  <i class="ms-2 ph ph-arrow-right"></i>
                </span>
                <!-- /.btn_bottom -->
              </a>
            </div>
            <!-- /.slider_btn_box -->
          </div>
          <!-- /.slider_content_text -->
        </div>
        <!-- /.col-lg-6 -->

        <div class="slider_content_img col-lg-6">
          <div class="row">
            <div class="col-5 mb-4">
              <div class="slider_img">
                <img class="img-fluid" src="{{ asset('website/img/slider/10.jpg') }}" alt="99 Lives Story" />
              </div>
              <!-- /.slider_img -->
            </div>
            <!-- /.col-5 -->

            <div class="col-7 mb-4">
              <div class="slider_img">
                <img class="img-fluid" src="{{ asset('website/img/slider/10.jpg') }}" alt="Chamhembe Story" />
              </div>
              <!-- /.slider_img -->
            </div>
            <!-- /.col-7 -->

            <div class="col-7">
              <div class="slider_img">
                <img class="img-fluid" src="{{ asset('website/img/slider/10.jpg') }}" alt="Delani Story" />
              </div>
              <!-- /.slider_img -->
            </div>
            <!-- /.col-7 -->

            <div class="col-5">
              <div class="slider_img">
                <img class="img-fluid" src="{{ asset('website/img/slider/10.jpg') }}" alt="Manning Story" />
              </div>
              <!-- /.slider_img -->
            </div>
            <!-- /.col-5 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.slider_content_img -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.slider_item -->
  <!-- ======================================================================= -->
  <!--                             SLIDER ITEM END                             -->
  <!-- ======================================================================= -->

  <!-- ======================================================================= -->
  <!--                            SLIDER ITEM START                            -->
  <!-- ======================================================================= -->
  <div class="slider_item">
    <div class="container my-12">
      <div class="row align-items-center">
        <div class="col-lg-6 position-relative z-2">
          <div class="slider_content_text">
            <p class="slider_subtitle text-white">Intentionally Daring Originals</p>
            <!-- slider_subtitle -->

            <h1 style="color: #ea202e;" class="slider_title">
              <span class="text-wrapper">
                <span class="letters">
                  
                  Inspired by meaningful stories?
                </span>
                <!-- /.letters -->
              </span>
              <!-- text-wrapper -->
            </h1>
            <!-- /.slider_title -->

            <p class="slider_text text-white">
            When we're not helping you tell your story, we create our own. Explore stories that shape conversations and change perspectives
            </p>
            <!-- /.slider_text -->
            <div class="slider_btn_box">
              <a href="#works" class="slider_btn rdn_btn go_btn" target="_blank">
                <span class="btn_top">
                  Watch Now
                  <i class="ms-2 ph ph-arrow-right"></i>
                </span>
                <!-- /.btn_top -->
                <span class="btn_bottom">
                  Watch Now
                  <i class="ms-2 ph ph-arrow-right"></i>
                </span>
                <!-- /.btn_bottom -->
              </a>
            </div>
            <!-- /.slider_btn_box -->
          </div>
          <!-- /.slider_content_text -->
        </div>
        <!-- /.col-lg-6 -->

        <div class="slider_content_img col-lg-6">
          <div class="row">
            <div class="col-5 mb-4">
              <div class="slider_img">
                <img class="img-fluid" src="{{ asset('website/img/slider/10.jpg') }}" alt="Happiness Book Cover" />
              </div>
              <!-- /.slider_img -->
            </div>
            <!-- /.col-5 -->

            <div class="col-7 mb-4">
              <div class="slider_img">
                <img class="img-fluid" src="{{ asset('website/img/slider/10.jpg') }}" alt="Chamhembe Story" />
              </div>
              <!-- /.slider_img -->
            </div>
            <!-- /.col-7 -->

            <div class="col-7">
              <div class="slider_img">
                <img class="img-fluid" src="{{ asset('website/img/slider/10.jpg') }}" alt="Delani Story" />
              </div>
              <!-- /.slider_img -->
            </div>
            <!-- /.col-7 -->

            <div class="col-5">
              <div class="slider_img">
                <img class="img-fluid" src="{{ asset('website/img/slider/10.jpg') }}" alt="Manning Story" />
              </div>
              <!-- /.slider_img -->
            </div>
            <!-- /.col-5 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.slider_content_img -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.slider_item -->
  <!-- ======================================================================= -->
  <!--                             SLIDER ITEM END                             -->
  <!-- ======================================================================= -->

  <!-- ======================================================================= -->
  <!--                               SLIDER NAV                                -->
  <!-- ======================================================================= -->
  <div class="nav_slider">
    <div class="prev slide_nav cursor_big">
      <i class="ph ph-arrow-down-left"></i>
    </div>
    <!-- /.prev -->
    <div class="next slide_nav cursor_big">
      <i class="ph ph-arrow-up-right"></i>
    </div>
    <!-- /.next -->
  </div>
  <!-- /.nav_slider -->
  <!-- ======================================================================= -->
  <!--                             SLIDER NAV END                              -->
  <!-- ======================================================================= -->

  <div class="slider_pagi_box">
    <ul class="list-unstyled slider_pagination"></ul>
    <!-- /.list-unstyled -->
  </div>
  <!-- /.slider_pagi_box -->
  <img src="{{ asset('website/img/slider/circle_img.svg') }}" alt="" class="circle_img" />

  <ul class="list-unstyled slider_social_icon">
    <li>
      <a href="https://www.facebook.com/weareidzw" target="_blank">
        <i class="fa-brands fa-facebook-f"></i>
      </a>
    </li>
    <li>
      <a href="https://www.instagram.com/weareidzw/" target="_blank">
        <i class="fa-brands fa-instagram"></i>
      </a>
    </li>
    <li>
      <a href="https://www.youtube.com/@intentionallydaring" target="_blank">
        <i class="fa-brands fa-youtube"></i>
      </a>
    </li>
  </ul>
  <!-- /.list-unstyled -->
</div>



  <!--                           WORKS SECTION START                           -->
      <!-- ======================================================================= -->
      <section style="background-color: #4a5464;" id="works" class="bg_darker py-10">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 offset-lg-2 text-center">
            <p class="text-uppercase tc_heading-50 text-white">My Work, Your Story</p>
            <h2 style="color: #ea202e;" class="mb-8">
            Explore Original Stories
            </h2>
            <p class="text-uppercase tc_heading-50 text-white">When we're not helping you tell your story, 
              we create our own. Explore stories that shape conversations and change perspectives</p>
                </div>
          <!-- /.col-lg-8 offset-lg-2 -->
              </div>
        <!-- /.row -->
        <ul class="port_filter list-unstyled">
          <!-- <li><a href="#" class="active" data-filter="*">Explore Our Work</a></li> -->
          <!-- <li><a href="#" data-filter=".wedding">Wedding</a></li>
          <li><a href="#" data-filter=".videography">Videography</a></li>
          <li><a href="#" data-filter=".potrait">Potrait</a></li> -->
        </ul>
        <!-- /.port_filter list-unstyled mb-0 -->
        <div class="row port_body">
          <!-- ======================================================================= -->
          <!--                            WORKS ITEM START                             -->
          <!-- ======================================================================= -->
          <div class="col-lg-4 col-md-6 port_item mb-4 wedding">
            <div class="port_box position-relative">
             <!--  <div class="port_location">
                <i class="ph ph-map-pin-area"></i>
                Intentionally Daring
            </div> -->
              <!-- /.port_location -->

              <div class="port_content">
                <div class="port_line"></div>
                <!-- /.port_line -->
                <div class="port_bottom">
                  <div class="port_detail">
                    <p class="text-uppercase tc_heading-50 mb-1"><!-- Event --></p>
                      <h3>
                     <!--  99 Lives -->
                      </h3>
                  </div>
                  <!-- /.port_detail -->
                  <div class="port_link_box">
                    <a href="single-work.html" class="port_link">
                      <i class="ph ph-arrow-up-right"></i>
                    </a>
                    <!-- /.port_link -->
                </div>
                  <!-- /.port_link_box -->
                  </div>
                <!-- /.port_bottom -->
                </div>
              <!-- /.port_content -->
              <div class="port_mask"></div>
              <!-- /.port_mask -->
              <img src="{{asset('website/img/slider/99lives.jpeg')}}" alt="#" class="img-fluid" />
                  </div>
            <!-- /.port_box -->
                </div>
          <!-- /.col-lg-4  col-md-6 port_item -->
          <!-- ======================================================================= -->
          <!--                             WORKS ITEM END                              -->
          <!-- ======================================================================= -->

          <!-- ======================================================================= -->
          <!--                            WORKS ITEM START                             -->
          <!-- ======================================================================= -->
          <div class="col-lg-4 col-md-6 port_item mb-4 videography">
            <div class="port_box position-relative">
              <div class="port_location">
                <i class="ph ph-map-pin-area"></i>
                <!-- Yogyakarta -->
                  </div>
              <!-- /.port_location -->

              <div class="port_content">
                <div class="port_line"></div>
                <!-- /.port_line -->
                <div class="port_bottom">
                  <div class="port_detail">
                    <p class="text-uppercase tc_heading-50 mb-1"><!-- Lifestyle --></p>
                    <h3><!-- Urban Lifestyle Shoot --></h3>
                </div>
                  <!-- /.port_detail -->
                  <div class="port_link_box">
                    <a href="single-work.html" class="port_link">
                      <i class="ph ph-arrow-up-right"></i>
                    </a>
                    <!-- /.port_link -->
              </div>
                  <!-- /.port_link_box -->
            </div>
                <!-- /.port_bottom -->
          </div>
              <!-- /.port_content -->
              <div class="port_mask"></div>
              <!-- /.port_mask -->
                  <img src="{{asset('website/img/slider/1500TheStoryofManning Poster.jpg')}}" alt="#" class="img-fluid" />
            </div>
            <!-- /.port_box -->
      </div>
          <!-- /.col-lg-4  col-md-6 port_item -->
      <!-- ======================================================================= -->
          <!--                             WORKS ITEM END                              -->
      <!-- ======================================================================= -->

      <!-- ======================================================================= -->
          <!--                            WORKS ITEM START                             -->
      <!-- ======================================================================= -->
          <div class="col-lg-4 col-md-6 port_item mb-4 potrait">
            <div class="port_box position-relative">
              <div class="port_location">
                <i class="ph ph-map-pin-area"></i>
                <!-- Bangkok -->
              </div>
              <!-- /.port_location -->

              <div class="port_content">
                <div class="port_line"></div>
                <!-- /.port_line -->
                <div class="port_bottom">
                  <div class="port_detail">
                    <p class="text-uppercase tc_heading-50 mb-1"><!-- Wedding --></p>
                    <h3><!-- Golden Hour Wedding --></h3>
                  </div>
                  <!-- /.port_detail -->
                  <div class="port_link_box">
                    <a href="single-work.html" class="port_link">
                      <i class="ph ph-arrow-up-right"></i>
                    </a>
                    <!-- /.port_link -->
                </div>
                  <!-- /.port_link_box -->
              </div>
                <!-- /.port_bottom -->
            </div>
              <!-- /.port_content -->
              <div class="port_mask"></div>
              <!-- /.port_mask -->
              <img src="{{asset('website/img/slider/ChamhembeStory.jpg')}}" alt="#" class="img-fluid" />
                  </div>
            <!-- /.port_box -->
                </div>
          <!-- /.col-lg-4  col-md-6 port_item -->
          <!-- ======================================================================= -->
          <!--                             WORKS ITEM END                              -->
          <!-- ======================================================================= -->

          <!-- ======================================================================= -->
          <!--                            WORKS ITEM START                             -->
          <!-- ======================================================================= -->
          <div class="col-lg-4 col-md-6 port_item mb-4 potrait videography">
            <div class="port_box position-relative">
              <div class="port_location">
                <i class="ph ph-map-pin-area"></i>
                <!-- Sydney -->
                  </div>
              <!-- /.port_location -->

              <div class="port_content">
                <div class="port_line"></div>
                <!-- /.port_line -->
                <div class="port_bottom">
                  <div class="port_detail">
                    <p class="text-uppercase tc_heading-50 mb-1"><!-- Event --></p>
                    <h3><!-- Product Launch Film --></h3>
                  </div>
                  <!-- /.port_detail -->
                  <div class="port_link_box">
                    <a href="single-work.html" class="port_link">
                      <i class="ph ph-arrow-up-right"></i>
                    </a>
                    <!-- /.port_link -->
                </div>
                  <!-- /.port_link_box -->
                  </div>
                <!-- /.port_bottom -->
                </div>
              <!-- /.port_content -->
              <div class="port_mask"></div>
              <!-- /.port_mask -->
              <img src="{{asset('website/img/slider/Delani Step Aside Makhalima- The Man, The Music, The Dream.jpeg')}}" alt="#" class="img-fluid" />
              </div>
            <!-- /.port_box -->
            </div>
          <!-- /.col-lg-4  col-md-6 port_item -->
      <!-- ======================================================================= -->
          <!--                             WORKS ITEM END                              -->
      <!-- ======================================================================= -->

      <!-- ======================================================================= -->
          <!--                            WORKS ITEM START                             -->
      <!-- ======================================================================= -->
          <div class="col-lg-4 col-md-6 port_item mb-4 wedding">
            <div class="port_box position-relative">
              <div class="port_location">
                <i class="ph ph-map-pin-area"></i>
                <!-- Singapore -->  
              </div>
              <!-- /.port_location -->

              <div class="port_content">
                <div class="port_line"></div>
                <!-- /.port_line -->
                <div class="port_bottom">
                  <div class="port_detail">
                    <p class="text-uppercase tc_heading-50 mb-1"><!-- Lifestyle --></p>
                      <h3><!-- Fashion Editorial --></h3>
                  </div>
                  <!-- /.port_detail -->
                  <div class="port_link_box">
                    <a href="single-work.html" class="port_link">
                      <i class="ph ph-arrow-up-right"></i>
                    </a>
                    <!-- /.port_link -->
                </div>
                  <!-- /.port_link_box -->
              </div>
                <!-- /.port_bottom -->
            </div>
              <!-- /.port_content -->
              <div class="port_mask"></div>
              <!-- /.port_mask -->
                <img src="{{asset('website/img/slider/ID One Sheeter-01.jpeg')}}" alt="#" class="img-fluid" />
                  </div>
            <!-- /.port_box -->
                </div>
          <!-- /.col-lg-4  col-md-6 port_item -->
          <!-- ======================================================================= -->
          <!--                             WORKS ITEM END                              -->
          <!-- ======================================================================= -->

          <!-- ======================================================================= -->
          <!--                            WORKS ITEM START                             -->
          <!-- ======================================================================= -->
          <div class="col-lg-4 col-md-6 port_item mb-4 videography wedding">
            <div class="port_box position-relative">
              <div class="port_location">
                <i class="ph ph-map-pin-area"></i>
                  <!-- Bandung -->
                  </div>
              <!-- /.port_location -->

              <div class="port_content">
                <div class="port_line"></div>
                <!-- /.port_line -->
                <div class="port_bottom">
                  <div class="port_detail">
                    <p class="text-uppercase tc_heading-50 mb-1"><!-- Brand --></p>
                    <h3><!-- Brand Story Video --></h3>
                  </div>
                  <!-- /.port_detail -->
                  <div class="port_link_box">
                    <a href="single-work.html" class="port_link">
                      <i class="ph ph-arrow-up-right"></i>
                    </a>
                    <!-- /.port_link -->
                </div>
                  <!-- /.port_link_box -->
                  </div>
                <!-- /.port_bottom -->
                </div>
              <!-- /.port_content -->
              <div class="port_mask"></div>
              <!-- /.port_mask -->
              <img src="{{asset('website/img/slider/befaithful.jpg')}}" alt="#" class="img-fluid" />
              </div>
            <!-- /.port_box -->
            </div>
          <!-- /.col-lg-4  col-md-6 port_item -->
          <!-- ======================================================================= -->
          <!--                             WORKS ITEM END                              -->
          <!-- ======================================================================= -->
          </div>
        <!-- /.row port_body-->
        </div>
        <!-- /.container -->
    </section>

    <section style="background-color: black;" id="contact" class="py-10 bg_darker">
      <div class="container">
        <div class="row align-items-end">
          <div class="col-lg-6 mb-8 mb-lg-0">
            <p class="text-uppercase tc_heading-50 text-white">
              Let's Make Something Beautiful
            </p>
            <h2 style="color: #ea202e;" class="mb-4">Connect with Us!</h2>
            <p class="mb-8 text-white">
            Have a story to tell? Let’s bring it to life together. Reach out to us:
            </p>
            <div class="contact_box shadow-sm">
              <img src="{{ asset('website/img/contact/1.jpg') }}" alt="" class="contact_img" />
              <ul class="contact_meta list-unstyled">
                <li><img src="{{ asset('website/img/general/logo.jpg') }}" alt="" /></li>
                <li>
                  <i class="ph ph-envelope"></i>
                  hello@intentionallydaring.com
                </li>
                <li>
                  <i class="ph ph-clock"></i>
                  Mon - Fri: 10.00 AM - 05.00 PM
                </li>
                <li>
                  <i class="ph ph-phone"></i>
                  +263718999619 | +17692786822
                </li>
              </ul>
              <!-- /.contact_meta -->
              <div class="bg_mask"></div>
              <!-- /.bg_mask -->
            </div>
            <!-- /.contact_box -->
            <ul class="list-unstyled contact_list d-flex mt-4 mb-0">
              <li>
                <i class="ph ph-building-apartment"></i>
               97 Baines Avenue, Harare - Zimbabwe
              </li>
              <li class="ms-auto">
                View on map
                <a
                  href="https://maps.app.goo.gl/eU7KhP8TLeesLU9j8"
                  target="_blank">
                  <i class="ph ph-arrow-right"></i>
                </a>
              </li>
            </ul>
            <!-- /.list-unstyled contact_list d-flex -->
            </div>
            <!-- /.col-lg-6 -->

          <div class="col-lg-6">
            <ul
              class="list-unstyled d-flex row-cols-3 mb-8 text-center"
              data-cues="slideInUp">
              <li><img src="img/client/1.png" class="img-fluid" alt="" /></li>
              <li><img src="img/client/2.png" class="img-fluid" alt="" /></li>
              <li><img src="img/client/3.png" class="img-fluid" alt="" /></li>
            </ul>
            <!-- /.list-unstyled d-flex row-cols-3 -->
            <!-- ======================================================================= -->
            <!--                               FORM START                                -->
            <!-- ======================================================================= -->
            <form action="#" class="contact_form bg_dark">
              <input type="text" name="name" placeholder="Your name..." />
              <input type="email" name="email" placeholder="Your email..." />
              <input type="tel" name="phone" placeholder="Your phone..." />
              <textarea
                rows="5"
                placeholder="Your message..."
                name="message"></textarea>
              <div class="button-area">
                <button class="contact_btn" type="submit">
                  Send Message
                  <i class="ph ph-arrow-right"></i>
                </button>
                <span class="contact_out_text mt-2"></span>
                  </div>
            </form>
            <!-- ======================================================================= -->
            <!--                                FORM END                                 -->
            <!-- ======================================================================= -->
                </div>
          <!-- /.col-lg-6 -->
                  </div>
        <!-- /.row -->
                </div>
      <!-- /.container -->
    </section>
@endsection

