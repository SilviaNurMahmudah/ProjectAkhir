@extends('layouts.parent')

@section('judul','Detail')

@section('konten')

<!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Detail Page</h2>
          <ol>
            <li><a href="/home">Home</a></li>
            <li>Detail Page</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="{{$Destinasi->image}}" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <ul>
              <li><strong>Category: </strong>{{$Destinasi->jenis_wisata}}</li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>{{$Destinasi->title}}</h2>
          <p>
            {{$Destinasi->content}}
          </p>
        </div>

      </div>
    </section>
    <!-- End Portfolio Details Section -->

@endsection