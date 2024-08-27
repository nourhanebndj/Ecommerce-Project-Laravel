<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/guest/home">
            <!-- Desktop Logo -->
            <img src="{{asset('mainassets/images/logo_black.png')}}" alt="EcommerceDz Logo" class="logo-desktop">
            <!-- Mobile Logo -->
            <img src="{{asset('mainassets/images/logo_white.png')}}" alt="EcommerceDz Logo" class="logo-mobile">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
    </div>
    

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="/guest/home" class="nav-link">Accueil</a></li>
                <li class="nav-item"><a href="/shop" class="nav-link">Boutique</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="collectionDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catégories</a>
                    <div class="dropdown-menu" aria-labelledby="collectionDropdown">
                        @foreach($categories as $category)
                        <a class="dropdown-item" href="{{ route('category.details', $category->id) }}">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </li>
                <li class="nav-item"><a href="/contact" class="nav-link">Contact</a></li>
                <li class="nav-item"><a href="/login" class="nav-link">Connexion</a></li>
                <li class="nav-item cta cta-colored">
                    <a href="#" class="nav-link">
                        <span class="icon-shopping_cart"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <form id="search-form" class="search-form" style="display: none;" action="/product/search" method="POST">
                        @csrf
                        <input type="text" class="form-control" placeholder="Rechercher des produits..." name="search" id="search-input">
                        <button type="submit" class="btn btn-primary">Chercher</button>
                        <div id="search-results" class="search-results"></div>
                    </form>
                    <a href="#" class="nav-link" id="search-icon"><span class="icon-search"></span></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    document.getElementById('search-icon').addEventListener('click', function(event) {
        event.preventDefault();
        var searchForm = document.getElementById('search-form');
        searchForm.style.display = searchForm.style.display === 'none' ? 'block' : 'none';
    });
</script>

<style>
    .search-form {
        position: absolute;
        right: 0;
        top: 80px; /* Adjusted to fit below the navbar */
        transition: all 0.5s ease;
    }
    /* Default: Desktop Logo visible, Mobile Logo hidden */
.logo-desktop {
    height: 100px;
    width: 100px;
}

.logo-mobile {
    height: 60px;
    width: 60px;
    display: none;
}

/* Media Query for Mobile: Mobile Logo visible, Desktop Logo hidden */
@media (max-width: 767px) {
    .logo-desktop {
        display: none;
    }
    .logo-mobile {
        display: inline-block;
    }
}

</style>
