@extends('layouts.parent')

@section('judul','Home')

@section('konten')

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="fade-up">
      <h1>Welcome to Our Webstite</h1>
      <h2>Website ini memberikan info tentang wisata di Kota Batu</h2>
      <a href="#" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- End Hero -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>DESTINATION</h2>
          <h3>Check our <span>Destination</span></h3>
          <p>Temukan Kebahagiaan di Kota Kecil ini</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center" data-aos="fade-up">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
        @foreach($Destinasi as $d)
          <div class="col-lg-4 col-md-6 portfolio-item">
            <img src="{{$d->image}}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>{{$d->title}}</h4>
              <p>{{$d->jenis_wisata}}</p>
              <a href="{{$d -> image}}" data-gall="portfolioGallery" class="venobox preview-link" title="{{$d->title}}"><i class="bx bx-plus"></i></a>
              <a href="/detail{{ $d->id }}" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        @endforeach
        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>Contact</h2>
          <h3>Check our <span>Contact</span> Details</h3>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Kota Batu, Jawa Timur, IND</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>xoxo@email.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+62 8575 5238 045</p>
              </div>

            </div>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


@endsection