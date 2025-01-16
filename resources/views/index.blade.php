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
  <!-- SLIDER ITEM START -->
  <div class="slider_item is-active">
    <div class="container my-12">
      <div class="row align-items-center">
        <div class="col-lg-6 position-relative z-2">
          <div class="slider_content_text">
            <p class="slider_subtitle text-white">We Tell Great Stories</p>
            <h1 style="color: #ea202e;" class="slider_title">
              <span class="text-wrapper">
                <span class="letters">Stories connect us. Great ones change how we see the world.</span>
              </span>
            </h1>
            <p class="slider_text text-white">Intentionally Daring is here to help you share yours.</p>
            <div class="slider_btn_box">
              <a href="#works" class="slider_btn rdn_btn go_btn">
                <span class="btn_top">Explore Our Work <i class="ms-2 ph ph-arrow-right"></i></span>
                <span class="btn_bottom">Explore Our Work <i class="ms-2 ph ph-arrow-right"></i></span>
              </a>
            </div>
          </div>
        </div>
        <div class="slider_content_img col-lg-6">
          <div class="row">
            <div class="col-5 mb-4">
              <div class="slider_img">
                <img class="img-fluid" src="{{ asset('website/img/slider/10.jpg') }}" alt="99 Lives Story" />
              </div>
            </div>
            <div class="col-7 mb-4">
              <div class="slider_img">
                <img class="img-fluid" src="{{ asset('website/img/slider/10.jpg') }}" alt="Chamhembe Story" />
              </div>
            </div>
            <div class="col-7">
              <div class="slider_img">
                <img class="img-fluid" src="{{ asset('website/img/slider/10.jpg') }}" alt="Delani Story" />
              </div>
            </div>
            <div class="col-5">
              <div class="slider_img">
                <img class="img-fluid" src="{{ asset('website/img/slider/10.jpg') }}" alt="Manning Story" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- SLIDER ITEM END -->

  <!-- SLIDER ITEM START -->
  <div class="slider_item">
    <div class="container my-12">
      <div class="row align-items-center">
        <div class="col-lg-6 position-relative z-2">
          <div class="slider_content_text">
            <p class="slider_subtitle text-white">Intentionally Daring Originals</p>
            <h1 style="color: #ea202e;" class="slider_title">
              <span class="text-wrapper">
                <span class="letters">Inspired by meaningful stories?</span>
              </span>
            </h1>
            <p class="slider_text text-white">
              When we're not helping you tell your story, we create our own. Explore stories that shape conversations and change perspectives.
            </p>
            <div class="slider_btn_box">
              <a href="#works" class="slider_btn rdn_btn go_btn" target="_blank">
                <span class="btn_top">Watch Now <i class="ms-2 ph ph-arrow-right"></i></span>
                <span class="btn_bottom">Watch Now <i class="ms-2 ph ph-arrow-right"></i></span>
              </a>
            </div>
          </div>
        </div>
        <div class="slider_content_img col-lg-6">
          <div class="row">
            <div class="col-5 mb-4">
              <div class="slider_img">
                <img class="img-fluid" src="{{ asset('website/img/slider/10.jpg') }}" alt="Happiness Book Cover" />
              </div>
            </div>
            <div class="col-7 mb-4">
              <div class="slider_img">
                <img class="img-fluid" src="{{ asset('website/img/slider/10.jpg') }}" alt="Chamhembe Story" />
              </div>
            </div>
            <div class="col-7">
              <div class="slider_img">
                <img class="img-fluid" src="{{ asset('website/img/slider/10.jpg') }}" alt="Delani Story" />
              </div>
            </div>
            <div class="col-5">
              <div class="slider_img">
                <img class="img-fluid" src="{{ asset('website/img/slider/10.jpg') }}" alt="Manning Story" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- SLIDER ITEM END -->

  <!-- SLIDER NAV -->
  <div class="nav_slider">
    <div class="prev slide_nav cursor_big">
      <i class="ph ph-arrow-down-left"></i>
    </div>
    <div class="next slide_nav cursor_big">
      <i class="ph ph-arrow-up-right"></i>
    </div>
  </div>

  <div class="slider_pagi_box">
    <ul class="list-unstyled slider_pagination"></ul>
  </div>
  <img src="{{ asset('website/img/slider/circle_img.svg') }}" alt="" class="circle_img" />

  <ul class="list-unstyled slider_social_icon">
    <li><a href="https://www.facebook.com/weareidzw" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
    <li><a href="https://www.instagram.com/weareidzw/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
    <li><a href="https://www.youtube.com/@intentionallydaring" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
  </ul>
</div>

<!-- WORKS SECTION -->
<section style="background-color: #4a5464;" id="works" class="bg_darker py-10">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 text-center">
        <p class="text-uppercase tc_heading-50 text-white">My Work, Your Story</p>
        <h2 style="color: #ea202e;" class="mb-8">Explore Original Stories</h2>
        <p class="text-uppercase tc_heading-50 text-white">
          When we're not helping you tell your story, we create our own. Explore stories that shape conversations and change perspectives.
        </p>
      </div>
    </div>
    <ul class="port_filter list-unstyled"></ul>
    <div class="row port_body">
      <!-- WORKS ITEMS HERE -->
      <div class="row port_body">
  <!-- WORK ITEM 1 -->
  <div class="col-lg-4 col-md-6 port_item mb-4 wedding">
    <div class="port_box position-relative">
      <a href="https://youtube.com/playlist?list=PLUa3jVJU5dRU_Xwa4bQeMyseNhX4zDS2z" target="_blank" class="port_content">
        <div class="port_line"></div>
        <div class="port_bottom">
          <div class="port_detail">
            <p class="text-uppercase tc_heading-50 mb-1">99 Lives</p>
            <h3>The Tich Mataz Story</h3>
          </div>
          <div class="port_link_box">
            <span class="port_link">
              <i class="ph ph-arrow-up-right"></i>
            </span>
          </div>
        </div>
      </a>
      <div class="port_mask"></div>
      <img src="{{ asset('website/img/slider/99lives.jpeg') }}" alt="99 Lives - The Tich Mataz Story" class="img-fluid" />
    </div>
  </div>

  <!-- WORK ITEM 2 -->
  <div class="col-lg-4 col-md-6 port_item mb-4 videography">
    <div class="port_box position-relative">
      <a href="https://www.youtube.com/watch?v=75TYIrmamlA" target="_blank" class="port_content">
        <div class="port_line"></div>
        <div class="port_bottom">
          <div class="port_detail">
            <p class="text-uppercase tc_heading-50 mb-1">1500</p>
            <h3>The Story of Manning</h3>
          </div>
          <div class="port_link_box">
            <span class="port_link">
              <i class="ph ph-arrow-up-right"></i>
            </span>
          </div>
        </div>
      </a>
      <div class="port_mask"></div>
      <img src="{{ asset('website/img/slider/1500TheStoryofManning Poster.jpg') }}" alt="1500 - The Story of Manning" class="img-fluid" />
    </div>
  </div>

  <!-- WORK ITEM 3 -->
  <div class="col-lg-4 col-md-6 port_item mb-4 potrait">
    <div class="port_box position-relative">
      <a href="https://www.youtube.com/playlist?list=PLUa3jVJU5dRVXI984ppzeRCPDkoVgD9Dz" target="_blank" class="port_content">
        <div class="port_line"></div>
        <div class="port_bottom">
          <div class="port_detail">
            <p class="text-uppercase tc_heading-50 mb-1">Chamhembe</p>
            <h3>The Story of Chamhembe</h3>
          </div>
          <div class="port_link_box">
            <span class="port_link">
              <i class="ph ph-arrow-up-right"></i>
            </span>
          </div>
        </div>
      </a>
      <div class="port_mask"></div>
      <img src="{{ asset('website/img/slider/ChamhembeStory.jpg') }}" alt="The Story of Chamhembe" class="img-fluid" />
    </div>
  </div>

  <!-- WORK ITEM 4 -->
  <div class="col-lg-4 col-md-6 port_item mb-4 potrait videography">
    <div class="port_box position-relative">
      <a href="https://www.youtube.com/playlist?list=PLUa3jVJU5dRVIO6ZwYPF8J6sTR9IHM9Iq" target="_blank" class="port_content">
        <div class="port_line"></div>
        <div class="port_bottom">
          <div class="port_detail">
            <p class="text-uppercase tc_heading-50 mb-1">Delani</p>
            <h3>Step Aside Makhalima: The Man, The Music, The Dream</h3>
          </div>
          <div class="port_link_box">
            <span class="port_link">
              <i class="ph ph-arrow-up-right"></i>
            </span>
          </div>
        </div>
      </a>
      <div class="port_mask"></div>
      <img src="{{ asset('website/img/slider/Delani Step Aside Makhalima- The Man, The Music, The Dream.jpeg') }}" alt="Delani Step Aside Makhalima" class="img-fluid" />
    </div>
  </div>



  <!-- WORK ITEM 6 -->
  <div class="col-lg-4 col-md-6 port_item mb-4 videography wedding">
    <div class="port_box position-relative">
      <a href="https://www.youtube.com/watch?v=5mxL_5iUiNA" target="_blank" class="port_content">
        <div class="port_line"></div>
        <div class="port_bottom">
          <div class="port_detail">
            <p class="text-uppercase tc_heading-50 mb-1">Be Faithful</p>
            <h3>A Brand Story Video</h3>
          </div>
          <div class="port_link_box">
            <span class="port_link">
              <i class="ph ph-arrow-up-right"></i>
            </span>
          </div>
        </div>
      </a>
      <div class="port_mask"></div>
      <img src="{{ asset('website/img/slider/befaithful.jpg') }}" alt="Be Faithful - A Brand Story Video" class="img-fluid" />
    </div>
  </div>

<!-- WORK ITEM 5 -->
<div class="col-lg-4 col-md-6 port_item mb-4 wedding">
    <div class="port_box position-relative">
      <a href="https://www.youtube.com/@intentionallydaring" target="_blank" class="port_content">
        <div class="port_line"></div>
        <div class="port_bottom">
          <div class="port_detail">
            <p class="text-uppercase tc_heading-50 mb-1">Fashion Editorial</p>
            <h3>Creative Expressions Through Style</h3>
          </div>
          <div class="port_link_box">
            <span class="port_link">
              <i class="ph ph-arrow-up-right"></i>
            </span>
          </div>
        </div>
      </a>
      <div class="port_mask"></div>
      <img src="{{ asset('website/img/slider/ID One Sheeter-01.jpeg') }}" alt="Fashion Editorial" class="img-fluid" />
    </div>
  </div>

    </div>
  </div>
</section>

<!-- CONTACT SECTION -->
<section style="background-color: black;" id="contact" class="py-10 bg_darker">
  <div class="container">
    <div class="row align-items-end">
      <div class="col-lg-6 mb-8 mb-lg-0">
        <p class="text-uppercase tc_heading-50 text-white">Let's Make Something Beautiful</p>
        <h2 style="color: #ea202e;" class="mb-4">Connect with Us!</h2>
        <p class="mb-8 text-white">Have a story to tell? Let’s bring it to life together. Reach out to us:</p>
        <div class="contact_box shadow-sm">
          <img src="{{ asset('website/img/contact/1.jpg') }}" alt="" class="contact_img" />
          <ul class="contact_meta list-unstyled">
            <li><img src="{{ asset('website/img/general/logo.jpg') }}" alt="" /></li>
            <li><i class="ph ph-envelope"></i> hello@intentionallydaring.com</li>
            <li><i class="ph ph-clock"></i> Mon - Fri: 10.00 AM - 05.00 PM</li>
            <li><i class="ph ph-phone"></i> +263718999619/+17692786822</li>
          </ul>
          <div class="bg_mask"></div>
        </div>
        <ul class="list-unstyled contact_list d-flex mt-4 mb-0">
          <li>
            <i class="ph ph-building-apartment"></i> 97 Baines Avenue, Harare - Zimbabwe
          </li>
        </ul>
        <ul class="list-unstyled contact_list d-flex mt-4 mb-0">
          <li>
            <i class="ph ph-map-pin-area"></i> View on map
            <a href="https://maps.app.goo.gl/eU7KhP8TLeesLU9j8" target="_blank"><i class="ph ph-arrow-right"></i></a>
          </li>
        </ul>
      </div>

      <div class="col-lg-6">
        <ul class="list-unstyled d-flex row-cols-3 mb-8 text-center">
          <li><img src="img/client/1.png" class="img-fluid" alt="" /></li>
          <li><img src="img/client/2.png" class="img-fluid" alt="" /></li>
          <li><img src="img/client/3.png" class="img-fluid" alt="" /></li>
        </ul>
        <form action="#" class="contact_form bg_dark">
          <input type="text" name="name" placeholder="Your name..." />
          <input type="email" name="email" placeholder="Your email..." />
          <input type="tel" name="phone" placeholder="Your phone..." />
          <textarea rows="5" placeholder="Your message..." name="message"></textarea>
          <div class="button-area">
            <button class="contact_btn" type="submit">Send Message <i class="ph ph-arrow-right"></i></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection
