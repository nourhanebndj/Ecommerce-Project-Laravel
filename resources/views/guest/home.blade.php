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
	
<!---topbar----->
@include('inc.guest.topbar')
<!----end of topbar---->
<!---home section---->
@include('inc.guest.homesection')
<!---End home section---->

<!--Product section--->
@include('inc.guest.Productsection')

<!--End Product section--->

<!--Review Section--->
@include('inc.guest.Reviewsection')

<!--End Review Section--->


<!---Footer--->
@include('inc.guest.footer')

  <!---End Footer--->


  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('mainassets/js/google-map.js') }}"></script>
  <script src="{{ asset('mainassets/js/main.js') }}"></script>
  </body>
</html>