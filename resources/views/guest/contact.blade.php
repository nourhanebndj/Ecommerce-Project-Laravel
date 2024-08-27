<!DOCTYPE html>
<html lang="en">
<head>
    <title>EcommerceDz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('mainassets/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('mainassets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('mainassets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('mainassets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('mainassets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('mainassets/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('mainassets/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('mainassets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('mainassets/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('mainassets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('mainassets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('mainassets/css/style.css') }}">
</head>
<body class="goto-here">
    @include('inc.guest.topbar')
<div class="hero-wrap hero-bread" style="background-color:#93e1f0;">
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Accueil</a></span>/<span>Contactez nous</span></p>
              <h1 class="mb-0 bread">Contactez nous</h1>
            </div>
          </div>
        </div>
      </div>
      <section class="ftco-section contact-section bg-light">
          <div class="row block-9">
            <div class="col-md-6 order-md-last d-flex">
              <form action="#" class="bg-white p-5 contact-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Votre Nom">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Votre Email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Sujet">
                </div>
                <div class="form-group">
                  <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" value="Envoyer Message" class="btn btn-primary py-3 px-5">
                </div>
              </form>
            
            </div>
  
            <div class="col-md-6 d-flex">
                <div id="map" class="bg-white">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102080.76882001024!2d7.744464949999999!3d36.91368995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12f007bb034e7571%3A0x28fddce8b255b712!2sAnnaba!5e0!3m2!1sfr!2sdz!4v1724676601886!5m2!1sfr!2sdz" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
          </div>
        </div>
      </section> 





      @include('inc.guest.footer')

<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
    </svg>
</div>

<script src="{{ asset('mainassets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('mainassets/js/jquery-migrate-3.0.1.min.js') }}"></script>
    <script src="{{ asset('mainassets/js/popper.min.js') }}"></script>
    <script src="{{ asset('mainassets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('mainassets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('mainassets/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('mainassets/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('mainassets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('mainassets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('mainassets/js/aos.js') }}"></script>
    <script src="{{ asset('mainassets/js/jquery.animateNumber.min.js') }}"></script>
    <script src="{{ asset('mainassets/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ asset('mainassets/js/scrollax.min.js') }}"></script>
    <script src="https://maps.app.goo.gl/7tGs4Lhv4FTVQkvz8"></script>
    <script src="{{ asset('mainassets/js/google-map.js') }}"></script>
    <script src="{{ asset('mainassets/js/main.js') }}"></script>
</body>
</html>
