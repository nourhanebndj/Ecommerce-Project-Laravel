<!DOCTYPE html>
<html lang="en">
<head>
    <title>Checkout</title>
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
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="">Accueil</a>/</span> 
                        <span>Validation de la commande</span>
                    </p>
                    <h1 class="mb-0 bread">Validation de la commande</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 ftco-animate">
                    <form action="{{ route('client.checkout') }}" method="POST" class="billing-form">
                        @csrf
                        <h3 class="mb-4 billing-heading">Validation de la commande</h3>
                        <div class="row align-items-end">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lastname">Nom Complet</label>
                                    <input type="text" class="form-control" name="lastname" placeholder="" value="{{ old('lastname', $user->lastname) }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Téléphone</label>
                                    <input type="text" class="form-control" name="phone" placeholder="" value="{{ old('phone', $user->phone) }}" required>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="wilaya_id">Wilaya</label>
                                    <select name="wilaya_id" class="form-control" id="wilaya_id">
                                        @foreach (wilayas() as $id => $wilaya)
                                            <option value="{{ $id }}">{{ $wilaya }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="commune_id">Commune</label>
                                    <select name="commune_id" class="form-control" id="commune_id">
                                        @foreach (communes() as $id => $commune)
                                            <option value="{{ $id }}">{{ $commune }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="delivery">Livraison à domicile ou bien bureau</label>
                                    <select name="delivery" id="delivery" class="form-control">
                                        <option value="domicile">Domicile</option>
                                        <option value="bureau">Bureau</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="text-left">
                            <button type="submit" class="btn btn-primary py-3 px-4">Passer à la caisse</button>
                        </div>
                    </form>
                </div>

                <div class="col-xl-5 ftco-animate">
                    <div class="cart-detail cart-total bg-light p-3 p-md-4">
                        <h3 class="billing-heading mb-4">Totaux du panier</h3>
                        <p class="d-flex">
                            <span>Sous-total</span>
                            <span>{{ number_format($subtotal, 2) }} DA</span>
                        </p>
                        <p class="d-flex">
                            <span>Livraison</span>
                            <span>{{ number_format($delivery, 2) }} DA</span>
                        </p>
                        <hr>
                        <p class="d-flex total-price">
                            <span>Total</span>
                            <span>{{ number_format($total, 2) }} DA</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('inc.guest.footer')

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
    <script src="{{ asset('mainassets/js/google-map.js') }}"></script>
    <script src="{{ asset('mainassets/js/main.js') }}"></script>
</body>
</html>
