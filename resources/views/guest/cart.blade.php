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
    <!--Packages-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script>
        $(document).ready(function() {
            @if(session('success'))
                toastr.success("{{ session('success') }}");
            @endif
        });
    </script>
</head>

<body class="goto-here">
    @include('inc.guest.topbar')

	<div class="hero-wrap hero-bread" style="background-color: rgb(95, 227, 229);">
		<div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Accueil</a></span>/<span>Carte</span></p>
                    <h1 class="mb-0 bread">Ma Carte</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-cart">
        <div class="container">
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="cart-list">
                        <table class="table">
                            <thead class="thead-primary">
                                <tr class="text-center">
                                    <th>&nbsp;</th>
                                    <th></th>
                                    <th>Produit</th>
                                    <th>Prix</th>
                                    <th>Quantité</th>
                                    <th>Totale</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(isset($commande) && $commande->lignecommandes->count() > 0)
                                @foreach ($commande->lignecommandes as $lc)
                                <tr class="text-center">
                                    <td class="product-remove">
                                        <a href="{{ route('client.cart.remove', $lc->id) }}" class="remove-item">
                                            <span class="ion-ios-close"></span>
                                        </a>
                                    </td>
                                    
                                    <td class="image-prod">
                                        <div class="img" style="background-image:url('{{ asset('uploads/' . $lc->product->photo) }}'); width: 100px; height: 100px; background-size: cover; background-position: center;"></div>
                                    </td>
                                    
                                    
                                    <td class="product-name">
                                        <h3>{{ $lc->product->name }}</h3>
                                    </td>
                                    <td class="price">{{ $lc->product->price }} DA</td>
                                    <td class="quantity">
                                        <div class="input-group mb-3">
                                            <input type="text" name="quantity" class="quantity form-control input-number" value="{{ $lc->qte }}" min="1" max="100">
                                        </div>
                                    </td>
                                    <td class="total">{{ $lc->product->price * $lc->qte }} DA</td>
                                </tr>
                            @endforeach
                            
                                @else
                                    <tr>
                                        <td colspan="6" class="text-center">Aucune commande trouvée.</td>
                                    </tr>
                                @endif
                            </tbody>
                            
                            
							
                        </table>
                    </div>
                </div>
            </div>
            <form action="/client/checkout" method="GET">
                <input type="hidden" name="commande" value="{{ $commande->id }}">
                @csrf
            <div class="row justify-content-start">

                    <div class="col col-lg-5 col-md-6 mt-5 cart-wrap ftco-animate">
                        <div class="cart-total mb-3">
                            <h3>Totaux du panier</h3>
                            <p class="d-flex">
                                <span style="width: 50%;">Total</span>
                                <span style="width: 50%; text-align: right;">{{ number_format($subtotal, 2) }} DA</span>
                            </p>
                            <p class="d-flex">
                                <span style="width: 50%;">Livraison</span>
                                <span style="width: 50%; text-align: right;">{{ number_format($delivery, 2) }} DA</span>
                            </p>
                            <hr>
                            <p class="d-flex total-price">
                                <span style="width: 50%;">Total</span>
                                <span style="width: 50%; text-align: right;">{{ number_format($total, 2) }} DA</span>
                            </p>
                        </div>
                        <p class="text-center">
                            <button type="submit" class="btn btn-primary py-3 px-4">Passer à la caisse</button>
                        </p>
                    </div>
                </form>
                
        </div>
    </section>

    @include('inc.guest.footer')

    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{ asset('mainassets/js/google-map.js') }}"></script>
    <script src="{{ asset('mainassets/js/main.js') }}"></script>
    
    <script>
        $(document).ready(function(){
            var quantity = 0;
            $('.quantity-right-plus').click(function(e){
                e.preventDefault();
                var quantity = parseInt($('#quantity').val());
                $('#quantity').val(quantity + 1);
            });

            $('.quantity-left-minus').click(function(e){
                e.preventDefault();
                var quantity = parseInt($('#quantity').val());
                if(quantity > 0){
                    $('#quantity').val(quantity - 1);
                }
            });
        });
    </script>
</body>
</html>
