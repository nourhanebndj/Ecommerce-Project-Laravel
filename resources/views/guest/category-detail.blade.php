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
    <style>
        .product {
    border: 1px solid #ebebeb;
    padding: 15px;
    position: relative;
    overflow: hidden;
    background-color: #fff;
    transition: all 0.3s ease-in-out;
}

.product:hover {
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    transform: translateY(-5px);
}

.product .img-prod {
    position: relative;
    overflow: hidden;
}

.product .img-prod img {
    transition: transform 0.3s ease-in-out;
    width: 100%;
}

.product:hover .img-prod img {
    transform: scale(1.1);
}

.product .text {
    text-align: center;
    padding-top: 15px;
}

.product .pricing {
    margin-top: 10px;
}

.product .pricing .price-sale {
    color: #ff0000;
    font-weight: bold;
    margin-right: 5px;
}

.product .pricing .price-original {
    text-decoration: line-through;
    color: #999;
}

.product .bottom-area {
    margin-top: 15px;
    display: flex;
    justify-content: center;
    gap: 10px;
    opacity: 0;
    transform: translateY(20px);
    transition: all 0.3s ease-in-out;
}

.product:hover .bottom-area {
    opacity: 1;
    transform: translateY(0);
}

.btn-black {
    color: #fff;
    background-color: #000;
    border: 1px solid #000;
    display: inline-block;
    text-align: center;
    width: 100%;  
    padding: 20px 20px;  
    opacity: 1; 
}

.btn-black:hover {
    color: #000;
    background-color: #fff;
    text-decoration: none;
    transform: scale(1.05);
}

.btn-white {
    color: #000;
    background-color: #fff;
    border: 1px solid #000;
    display: inline-block;
    text-align: center;
    width: 100%;  
    padding: 20px 20px;  
    opacity: 1; 
}

.btn-white:hover {
    color: #fff;
    background-color: #000;
    text-decoration: none;
    transform: scale(1.05);
}

@media (max-width: 576px) {
    .product {
        width: 100%; /* Each product takes up nearly half the width of the container */
        margin: 1%;  /* Small margin to create space between the products */
        padding: 10px; /* Adjust padding for mobile */
        border: 1px solid #ebebeb;
        background-color: #fff;
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease-in-out;
    }

    .product:hover {
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        transform: translateY(-5px);
    }

    .product .img-prod img {
        transition: transform 0.3s ease-in-out;
        width: 100%;
    }

    .product:hover .img-prod img {
        transform: scale(1.1);
    }

    .product .text {
        text-align: center;
        padding-top: 10px; /* Adjust padding for mobile */
    }

    .product .pricing {
        margin-top: 5px; /* Reduce margin for mobile */
    }

    .product .pricing .price-sale {
        color: #ff0000;
        font-weight: bold;
        margin-right: 5px;
    }

    .product .pricing .price-original {
        text-decoration: line-through;
        color: #999;
    }

    .product .bottom-area {
        margin-top: 10px;
        display: flex;
        flex-direction: column; /* Stack buttons vertically */
        gap: 5px; /* Adjust gap between buttons */
        opacity: 1;
        transform: translateY(0);
    }

    .btn-black, .btn-white {
        width: 100%;  /* Buttons take up full width on mobile */
        padding: 10px 0;  /* Adjust padding for mobile */
        text-align: center;
        border: 1px solid #000;
        transition: all 0.3s ease-in-out;
    }

    .btn-black {
        color: #fff;
        background-color: #000;
    }

    .btn-black:hover {
        color: #000;
        background-color: #fff;
        transform: scale(1.05);
    }

    .btn-white {
        color: #000;
        background-color: #fff;
    }

    .btn-white:hover {
        color: #fff;
        background-color: #000;
        transform: scale(1.05);
    }

    .row {
        display: flex;
        flex-wrap: wrap; /* Ensures products wrap to the next line if there's not enough space */
        margin: -1%; /* Adjust the row margin to compensate for the margin on the products */
    }
}
@media (max-width: 765px) {
    .product {
        width: 100%; /* Each product takes up nearly half the width of the container */
        margin: 1%;  /* Small margin to create space between the products */
        padding: 10px; /* Adjust padding for tablet */
        border: 1px solid #ebebeb;
        background-color: #fff;
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease-in-out;
    }

    .product:hover {
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        transform: translateY(-5px);
    }

    .product .img-prod img {
        transition: transform 0.3s ease-in-out;
        width: 100%;
    }

    .product:hover .img-prod img {
        transform: scale(1.1);
    }

    .product .text {
        text-align: center;
        padding-top: 10px; /* Adjust padding for tablet */
    }

    .product .pricing {
        margin-top: 5px; /* Reduce margin for tablet */
    }

    .product .pricing .price-sale {
        color: #ff0000;
        font-weight: bold;
        margin-right: 5px;
    }

    .product .pricing .price-original {
        text-decoration: line-through;
        color: #999;
    }

    .product .bottom-area {
        margin-top: 10px;
        display: flex;
        flex-direction: column; /* Stack buttons vertically */
        gap: 5px; /* Adjust gap between buttons */
        opacity: 1;
        transform: translateY(0);
    }

    .btn-black, .btn-white {
        width: 100%;  /* Buttons take up full width on tablets */
        padding: 10px 0;  /* Adjust padding for tablet */
        text-align: center;
        border: 1px solid #000;
        transition: all 0.3s ease-in-out;
    }

    .btn-black {
        color: #fff;
        background-color: #000;
    }

    .btn-black:hover {
        color: #000;
        background-color: #fff;
        transform: scale(1.05);
    }

    .btn-white {
        color: #000;
        background-color: #fff;
    }

    .btn-white:hover {
        color: #fff;
        background-color: #000;
        transform: scale(1.05);
    }

    .row {
        display: flex;
        flex-wrap: wrap; /* Ensures products wrap to the next line if there's not enough space */
        margin: -1%; /* Adjust the row margin to compensate for the margin on the products */
    }
}


    </style>
</head>
<body class="goto-here">

@include('inc.guest.topbar')
<div class="hero-wrap hero-bread" style="background-color:#93e1f0;">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Accueil</a></span>/<span>{{ $category->name }}</span></p>
                <h1 class="mb-0 bread">{{ $category->name }}</h1>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-10 order-md-last">
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-sm-12 col-md-12 col-lg-4 ftco-animate d-flex">
                            <div class="product d-flex flex-column">
                                <a href="{{ route('product.details', $product->id) }}" class="img-prod">
                                    <img class="img-fluid" src="{{ asset('uploads/' . $product->photo) }}" alt="{{ $product->name }}">
                                </a>
                                <div class="text py-3 pb-4 px-3">
                                    <div class="cat">
                                        <span>{{ $product->category->name }}</span>
                                    </div>
                                    <h3><a href="{{ route('product.details', $product->id) }}">{{ $product->name }}</a></h3>
                                    <div class="pricing">
                                        @if($product->price_promotion)
                                            <span class="price-sale">{{ $product->price_promotion }} DA</span>
                                            <span class="price-original"><del>{{ $product->price }} DA</del></span>
                                        @else
                                            <span>{{ $product->price }} DA</span>
                                        @endif
                                    </div>
                                    <div class="bottom-area d-flex justify-content-between">
                                        <!-- Add to Cart Button -->
                                        <form action="/client/order/store" method="POST" class="mr-1">
                                            @csrf
                                            <input type="hidden" name="idproduct" value="{{ $product->id }}">
                                            <input type="hidden" name="qte" value="1">
                                            <button type="submit" class="btn btn-black btn-custom">
                                                Ajouter <i class="ion-ios-add ml-1"></i>
                                            </button>
                                        </form>
                                        <!-- Product Details Button -->
                                        <a href="{{ route('product.details', $product->id) }}" class="btn btn-white btn-custom">
                                            Voir Détail <i class="ion-ios-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <div class="block-27">
                            <ul>
                                <li><a href="#">&lt;</a></li>
                                <li class="active"><span>1</span></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&gt;</a></li>
                            </ul>
                        </div>
                    </div>
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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('mainassets/js/google-map.js') }}"></script>
<script src="{{ asset('mainassets/js/main.js') }}"></script>
</body>
</html>
