<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="mb-4" style="position: relative; display: inline-block;">Plus Récent</h2>

<style>
    h2.mb-4::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: -2px; /* Adjust the distance from the text */
        width: 100%;
        height: 5px; /* This sets the thickness of the underline */
        background-color: #93e1f0; /* Set the underline color to blue */
    }
</style>

            </div>
        </div>        
    </div>
    <div class="container">
        <div class="row">
            @foreach($produits as $produit)
            <div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex">
                <div class="product d-flex flex-column">
                    <a href="{{ route('product.details', $produit->id) }}" class="img-prod">
                        <img class="img-fluid" src="{{ asset('uploads/' . $produit->photo) }}" alt="{{ $produit->name }}">
                    </a>
                    <div class="text py-3 pb-4 px-3">
                        <div class="cat">
                            <span>{{ $produit->category->name }}</span>
                        </div>
                        <h3>{{ $produit->name }}</h3>
                        <div class="pricing">
                            @if($produit->price_promotion)
                                <span class="price-sale">{{ $produit->price_promotion }} DA</span>
                                <span class="price-original"><del>{{ $produit->price }} DA</del></span>
                            @else
                                <span>{{ $produit->price }} DA</span>
                            @endif
                        </div>
                        <div class="bottom-area d-flex justify-content-between">
                            <!-- Add to Cart Button -->
                            <form action="/client/order/store" method="POST" class="mr-1">
                                @csrf
                                <input type="hidden" name="idproduct" value="{{ $produit->id }}">
                                <input type="hidden" name="qte" value="1">
                                <button type="submit" class="btn btn-black btn-custom">
                                    Ajouter <i class="ion-ios-add ml-1"></i>
                                </button>
                            </form>
                            <!-- Product Details Button -->
                            <a href="{{ route('product.details', $produit->id) }}" class="btn btn-white btn-custom">
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