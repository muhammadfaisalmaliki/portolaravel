@extends('master')

@section('content')
<section class="about_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
              It is a long established fact that a reader will be distracted by the readable content of a page when
              looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of
              letters, as opposed to using 'Content here, content here', making it look like readable English. Many
              desktop publishing packages and web page editors now use Lorem Ipsum as their
            </p>
            <a href="">
              Get Started
            </a>
          </div>
        </div>
        <div class="col-md-6">
          <div class="img-box">
            <img src="{{ asset('images/about-img.png') }}" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="info_section layout_padding">
    <div class="footer_contact">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class="box">
        <a href="" class="img-box">
          <img src="{{ asset('images/location.png') }}" alt="" class="img-1">
          <img src="{{ asset('images/location-o.png') }}" alt="" class="img-2">
        </a>
        <a href="" class="img-box">
          <img src="{{ asset('images/call.png') }}" alt="" class="img-1">
          <img src="{{ asset('images/call-o.png') }}" alt="" class="img-2">
        </a>
        <a href="" class="img-box">
          <img src="{{ asset('images/envelope.png') }}" alt="" class="img-1">
          <img src="{{ asset('images/envelope-o.png') }}" alt="" class="img-2">
        </a>
      </div>
    </div>


  </section>


  <section class="container-fluid footer_section">
    <p>
      Copyright &copy; 2019 All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </section>

@endsection