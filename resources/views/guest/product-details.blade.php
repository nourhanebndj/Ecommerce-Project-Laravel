<!DOCTYPE html>
<html lang="en">
<head>
    <title>EcommerceDz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    
    <!-- CSS Libraries -->
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
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('mainassets/css/custom.css') }}">
    <style>
       .btn-black {
    color: #fff;
    background-color: #000;
    border: 1px solid #000;
    display: inline-block;
    text-align: center;
    width: 100%;  
    padding: 10px 0;  
    opacity: 1; 
}

.btn-black:hover {
    color: #000;
    background-color: #fff;
    text-decoration: none;
    transform: scale(1.05);
    opacity: 1;  /* Ensure full opacity on hover as well */
}

.btn-disabled {
    opacity: 0.6;
    cursor: not-allowed;
}


/* Boutons généraux */
.btn-black {
    color: #fff;
    background-color: #000;
    border: 1px solid #000;
    display: inline-block;
    text-align: center;
    padding: 20px 20px;
    opacity: 1;
    width: 100%;
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
}

.btn-white:hover {
    color: #fff;
    background-color: #000;
    text-decoration: none;
    transform: scale(1.05);
}

/* Section des produits similaires */
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

/* Boutons de quantité */
.quantity-buttons {
    display: flex;
    align-items: center;
    margin-top: 15px;
}

.quantity-buttons .btn-quantity {
    width: 35px;
    height: 35px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #000;
    color: #fff;
    border: none;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.quantity-buttons .btn-quantity:hover {
    background-color: #333;
}

.quantity-buttons input {
    width: 60px;
    text-align: center;
    border: 1px solid #ddd;
    margin: 0 5px;
    height: 35px;
    border-radius: 0;
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

    </style>
</head>
<body class="goto-here">
    @include('inc.guest.topbar')
    
    <!-- Product Details Section -->
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                @if($produit)
                <div class="col-lg-6 mb-5 ftco-animate">
                    <a href="{{ asset('uploads/' . $produit->photo) }}" class="image-popup">
                        <img src="{{ asset('uploads/' . $produit->photo) }}" class="img-fluid" alt="{{ $produit->name }}">
                    </a>
                </div>
                <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                    <h3>{{ $produit->name }}</h3>
                    <p class="price">
                        @if($produit->price_promotion)
                            <span class="price-sale">{{ $produit->price_promotion }} DA</span>
                            <span class="price-original"><del>{{ $produit->price }} DA</del></span>
                        @else
                            <span>{{ $produit->price }} DA</span>
                        @endif
                    </p>
                    <p>{{ $produit->description }}</p>
                    <form action="/client/order/store" method="POST">
                        @csrf
                        <input type="hidden" value="{{$produit->id}}" name="idproduct">
                        <div class="quantity-buttons">
                            <button type="button" class="btn-quantity" id="decrease-quantity"><i class="ion-ios-remove"></i></button>
                            <input type="number" id="quantity" name="qte" value="1" min="1" max="{{ $produit->qte }}">
                            <button type="button" class="btn-quantity" id="increase-quantity"><i class="ion-ios-add"></i></button>
                        </div>
                        <p style="color: #000; margin-top: 10px;">Quantité disponible: {{ $produit->qte }}</p>
                        <button type="submit" class="btn-black">Ajouter à la carte</button>
                    </form>
                </div>
                @else
                <div class="col-md-12">
                    <p>Produit non trouvé.</p>
                </div>
                @endif
            </div>
        </div>
    </section>
    
    <!-- Similar Products Section -->
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4" style="position: relative; display: inline-block;">Vous pourriez aussi aimer</h2>

                    <style>
                        h2.mb-4::after {
                            content: '';
                            position: absolute;
                            left: 0;
                            bottom: -2px;
                            width: 100%;
                            height: 5px; /* Set the underline thickness to 5px */
                            background-color: #93e1f0; /* Set the underline color to blue */
                        }
                    </style>
                                        <p>Découvrez des produits similaires à celui que vous consultez.</p>
                </div>
            </div>   
            <div class="row">
                @foreach($similarProducts as $product)
                <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                        <a href="{{ route('product.details', $product->id) }}" class="img-prod">
                            <img class="img-fluid" src="{{ asset('uploads/' . $product->photo) }}" alt="{{ $product->name }}">
                        </a>
                        <div class="text">
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
                            <div class="bottom-area">
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
        </div>
    </section>
    
    @include('inc.guest.footer')
    
    <!-- Loader -->
    <div id="ftco-loader" class="show fullscreen">
        <svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
        </svg>
    </div>
    
    <!-- JS Libraries -->
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
    <script src="{{ asset('mainassets/js/main.js') }}"></script>
    
    <!-- Custom JS -->
    <script>
        $(document).ready(function() {
            var quantity = $('#quantity');
            var maxQuantity = parseInt(quantity.attr('max'));
            
            $('#increase-quantity').click(function() {
                var currentVal = parseInt(quantity.val());
                if (!isNaN(currentVal) && currentVal < maxQuantity) {
                    quantity.val(currentVal + 1);
                }
            });
            
            $('#decrease-quantity').click(function() {
                var currentVal = parseInt(quantity.val());
                if (!isNaN(currentVal) && currentVal > 1) {
                    quantity.val(currentVal - 1);
                }
            });
        });
    </script>
</body>
</html>
