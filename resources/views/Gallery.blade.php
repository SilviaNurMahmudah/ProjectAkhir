<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Gallery</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<body>
    <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html">De Klein Switzerland</a></h1>
      </div>

    </div>
  </header><!-- End Header -->

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Gallery</h2>
          <ol>
            <li><a href="/home">Home</a></li>
            <li><a href="/comments">Comment</a></li>
            <li>Gallery</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <main id="main">
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="zoom-in">
          <h2>Gallery</h2>
          <h3>Our <span>Gallery</span></h3>
        </div>

        <div class="row">
        @foreach($Gallery as $g)
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up">
              <div class="member-img">
                <img src="{{$g -> image}}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>{{$g -> name}}</h4>
                <span>{{$g -> title}}</span>
              </div>
            </div>
          </div>
        @endforeach
        </div>

      </div>
    </section><!-- End Team Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
    <div class="section-title" data-aos="zoom-in">
          <h2>Other Stories</h2>
    </div>
      <div class="container">
        <div class="owl-carousel testimonials-carousel" data-aos="zoom-in">
           
        @foreach($Gallery as $g)
          <div class="testimonial-item">
            <h3>{{$g -> name}}</h3>
            <h4>{{$g -> title}}</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              {{$g -> content}}
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        @endforeach
        </div>
      </div>
    </section><!-- End Testimonials Section -->


    </main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

<div class="container footer-bottom clearfix">
  <div class="copyright">
    &copy; Copyright <strong><span>Nafis _ Silvia</span></strong>. MI 2F
  </div>
</div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>


</body>

</html>
