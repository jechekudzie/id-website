<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Intentionally Daring </title>
    <meta name="description" content="Stories connect us. Good ones make us feel. Better ones make us care. Great ones change how we see the world.
     At Intentionally Daring, we specialize in helping you craft and share your story—one that truly matters.">
  <!-- VENDOR JS -->
<!-- Favicon -->
<link rel="icon" type="image/x-icon" style="width: 100px; height: 100px;" href="{{ asset('website/img/general/logo.png') }}" />

<!-- PLUGIN CSS START -->
<link rel="stylesheet" href="{{ asset('website/css/bootstrap.css') }}" />
<link rel="stylesheet" href="{{ asset('website/css/fontawesome.all.min.css') }}" />
<link rel="stylesheet" href="{{ asset('website/css/phosphor.min.css') }}" />
<link rel="stylesheet" href="{{ asset('website/css/glightbox.min.css') }}" />
<link rel="stylesheet" href="{{ asset('website/css/scrollCue.min.css') }}" />
<link rel="stylesheet" href="{{ asset('website/css/plyr.css') }}" />
<link rel="stylesheet" href="{{ asset('website/css/swiper.min.css') }}" />

<!-- PLUGIN CSS END -->
<link rel="stylesheet" href="{{ asset('website/css/style.css') }}" />


  </head>
  <body>

    <!-- ======================================================================= -->
    <!--                              HEADER START                               -->
    <!-- ======================================================================= -->
    <header class="top_header py-2">
      <div class="container-fluid px-4">
        <div class="row align-items-center">
          <div class="col-lg-2 col-6">
            <a class="logo img-fluid" href="{{ route('index') }}">
              <img src="{{ asset('website/img/general/intentionally-daring-logo-full-color-rgb-2000px@144ppi.png')}} " alt="" />
            </a>
          </div>
          <!-- /.col-lg-2 -->

          <div class="col-lg-8 justify-content-center d-none d-lg-flex">
            <!-- ======================================================================= -->
            <!--                        DESKTOP NAVIGATION START                         -->
            <!-- ======================================================================= -->
            <ul
              class="list-unstyled d-flex align-items-center justify-content-center gap-4 mb-0 rdn_menu scroll_menu">
              <li><a style="color: black; font-size: 20px;" href="{{ route('index')}}">Home</a></li>
              <li><a style="color: black; font-size: 20px;" href="#about">About</a></li>
              <!-- <li><a href="#services">Services</a></li> -->
              <li><a style="color: black; font-size: 20px;" href="#works">Work</a></li>
              <!-- <li><a href="#news">News</a></li> -->
             <!--  <li><a href="#contact">Connect With Us</a></li> -->
            </ul>
            <!-- /.list-unstyled -->
            <!-- ======================================================================= -->
            <!--                         DESKTOP NAVIGATION END                          -->
            <!-- ======================================================================= -->
          </div>
          <!-- /.col-lg-8 -->

          <div class="col-lg-2 d-none d-lg-flex justify-content-end">
            <a href="#contact" class="rdn_btn header_btn go_btn">
              <span class="btn_top">
                <i class="me-1 ph ph-chat-centered-text"></i>
              Connect with us
              </span>
              <!-- /.btn_top -->
              <span class="btn_bottom">
                <i class="me-1 ph ph-chat-centered-text"></i>
                Connect with us
              </span>
              <!-- /.btn_bottom -->
            </a>
          </div>
          <!-- /.col-lg-2 -->
          <div class="col-6 d-lg-none mobile_menu_box">
            <div class="mobile_menu_btn cursor_big">
              <i class="ph ph-list"></i>
              <!-- /.ph ph-list -->
            </div>
            <!-- /.mobile_menu_btn -->
          </div>
          <!-- /.col-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container -->

      <!-- ======================================================================= -->
      <!--                             OFFCANVAS START                             -->
      <!-- ======================================================================= -->
      <div
        class="top_offcanvas_container offcanvas offcanvas-end bg_black shadow-sm"
        tabindex="-1"
        data-bs-scroll="true"
        id="top_offcanvas">
        <button class="close_mb" data-bs-dismiss="offcanvas" aria-label="Close">
          <i class="ph ph-x"></i>
        </button>

        <a style="margin-bottom: 20px;" href="{{ route('index') }}" class="logo_offcanvas">
          <img src="{{ asset('website/img/general/logo.jpg')}} " alt="image" class="logo img-fluid" />
        </a>
        <div class="offcanvas_nav"></div>
        <!-- /.offcanvas_nav -->
        <div class="d-flex mt-auto">
          <a href="#contact" class="rdn_btn header_btn go_btn">
            <span class="btn_top">
              <i class="me-1 ph ph-chat-centered-text"></i>
             Connect with us
            </span>
            <!-- /.btn_top -->
            <span class="btn_bottom">
              <i class="me-1 ph ph-chat-centered-text"></i>
              Connect with us
            </span>
            <!-- /.btn_bottom -->
          </a>
        </div>
        <!-- /.d-flex -->
      </div>
      <!-- top_offcanvas_container offcanvas offcanvas-start -->

      <!-- ======================================================================= -->
      <!--                              OFFCANVAS END                              -->
      <!-- ======================================================================= -->
    </header>

    <!-- ======================================================================= -->
    <!--                               HEADER END                                -->
    <!-- ======================================================================= -->

    @yield('content')


    <div class="cursor"></div>

    <footer style="background-color: black;" class="footer bg_black py-10">
      <div class="container text-center">
        <img src="{{ asset('website/img/general/logo.jpg') }} " alt="" class="footer_img" />
        <ul class="list-unstyled d-flex align-items-center justify-content-center gap-4 my-4 footer_menu">
          <li><a href="{{route('index')}}">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#works">Work</a></li>
          <li><a href="#contact">Connect With Us</a></li>
        </ul>
        <!-- /.list-unstyled -->
        <ul class="list-unstyled d-flex justify-content-center gap-2 mt-4">
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

        <p class="mt-10 text-white">
          © Copyright {{date('Y')}} - Intentionally Daring | All Rights Reserved | Designed by <a href="https://leadingdigital.africa" target="_blank">Leading Digital</a>
        </p>
      </div>
      <!-- /.container -->
    </footer>
    <!-- /.bg-black -->

    <!-- ======================================================================= -->
    <!--                               FOOTER END                                -->
    <!-- ======================================================================= -->
    <!-- VENDOR JS START -->
   <!-- VENDOR JS -->
<script src="{{ asset('website/js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('website/js/swiper-bundle.js') }}"></script>
<script src="{{ asset('website/js/scrollCue.min.js') }}"></script>
<script src="{{ asset('website/js/anime.min.js') }}"></script>
<script src="{{ asset('website/js/glightbox.min.js') }}"></script>
<script src="{{ asset('website/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('website/js/plyr.polyfilled.js') }}"></script>
<script src="{{ asset('website/js/zs-slider.js') }}"></script>
<script src="{{ asset('website/js/zs-script.js') }}"></script>
<script src="{{ asset('website/js/contact.js') }}"></script>

<!-- VENDOR JS END -->

<script src="{{ asset('website/js/script.js') }}"></script>

  </body>
</html>
