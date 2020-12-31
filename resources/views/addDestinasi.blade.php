<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Add Destinasi</title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
  <!-- Font Awesome icons (free version)-->
  <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
  <!-- Google fonts-->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="zzz/css/styles.css" rel="stylesheet" />
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="" /></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">             
          <i class="fas fa-bars ml-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/manageDestinasi">Manage</a></li>
            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#">Add</a></li>
          </ul>
        </div>
    </div>
  </nav>
  <main id="main">
    <!-- Contact-->
    <section class="page-section" id="contact">
      <div class="container">
        <div class="text-center">
          <h2 class="section-heading text-uppercase">Tambah</h2>
          <h3 class="section-subheading text-muted">My Destinasi</h3>
        </div>
        <form class="php-email-form mt-4" action="/Destinasi/create" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name"><font color="white">Title</font></label>
            <input type="text" class="form-control" required="required" name="title">
        </div>
        <div class="form-group">
            <label for="title"><font color="white">Content</font></label>
            <input type="text" class="form-control" required="required" name="content" >
        </div>
        <div class="form-group">
            <label for="content"><font color="white">Jenis Wisata</font></label>
            <input type="text" class="form-control" required="required" name="jenis_wisata" >
        </div>
        <div class="form-group">
            <label for="image"><font color="white">Image</font></label>
            <input type="file" class="form-control" required="required" name="image" ><br>
        </div>
        <div class="text-center">
            <div id="success"></div>
            <button class="btn btn-primary btn-xl text-uppercase" id="sendMessageButton" type="submit" name="add">Send</button>
        </div>
      </form>
    </div>
    </section>
  </main><!-- End #main -->

<footer class="footer py-4">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-4 text-lg-left">&copy; Copyright <strong><span>Nafis _ Silvia</span></strong>. MI 2F</div>
    </div>
  </div>
</footer>

<a href="#" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>

<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="zzz/assets/mail/jqBootstrapValidation.js"></script>
<script src="zzz/assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="zzz/js/scripts.js"></script>

</body>

</html>
