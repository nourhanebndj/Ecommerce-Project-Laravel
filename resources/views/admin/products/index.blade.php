<!doctype html>
<html lang="en-US" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard Admin</title>
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('dashassets/css/phoenix.min.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ asset('dashassets/css/user.min.css') }}" rel="stylesheet" id="user-style-default">
    <style>
        body {
            opacity: 0;
        }
    </style>
</head>

<body>
    <main class="main" id="top">
        <div class="container-fluid px-0">

            @include('inc.admin.sidebar')
            @include('inc.admin.nav')

            <div class="content">
                <div class="pb-5">
                    <div class="row g-5">
                        <div>
                            <h4>Listes des Produits</h4>
                            <hr>
                            <a data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary mt-3">Ajouter Produits</a>
                            <div class="mt-3">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Nom de Produit</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Catégorie</th>
                                            <th scope="col">Prix</th>
                                            <th scope="col">Prix-promotion</th>
                                            <th scope="col">Quantité</th>
                                            <th scope="col">Date de Création</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $index => $p)
                                            <tr>
                                                <th scope="row">{{ $index + 1 }}</th>
                                                <td> 
                                                    <img src="{{ asset('uploads/' . $p->photo) }}" alt="" width="50" height="50">
                                                </td>
                                                <td>{{ $p->name }}</td>
                                                <td>{{ $p->description }}</td>
                                                <td>{{ $p->category->name ?? 'N/A' }}</td> 
                                                <td>{{ $p->price }}</td>
                                                <td>{{ $p->price_promotion }}</td>
                                                <td>{{ $p->qte }}</td>
                                                <td>{{ $p->created_at }}</td>
                                                <td>
                                                    <a data-bs-toggle="modal" data-bs-target="#editproduct{{ $p->id }}" class="btn btn-success">Modifier</a>
                                                    <a onclick="return confirm('Voulez-vous vraiment supprimer ce produit?')" href="/admin/product/{{ $p->id }}/delete" class="btn btn-danger">Supprimer</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <footer class="footer">
                        <div class="row g-0 justify-content-between align-items-center h-100 mb-3">
                            <div class="col-12 col-sm-auto text-center">
                                <p class="mb-0 text-900">Merci de nous choisir<span class="d-none d-sm-inline-block"></span><span class="mx-1">|</span><br class="d-sm-none">2024 &copy; <a href="#">Aurapholio</a></p>
                            </div>
                            <div class="col-12 col-sm-auto text-center">
                                <p class="mb-0 text-600">v1.0.0</p>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal ajouter produit -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter Produit</h5>
                    <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close">
                        <span class="fas fa-times fs--1"></span>
                    </button>
                </div>
                <form action="/admin/product/store" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label" for="productNameInput">Nom Produit</label>
                            <input name="name" class="form-control" id="productNameInput" type="text" placeholder="Entrer le nom du produit">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="productDescriptionInput">Description</label>
                            <textarea name="description" class="form-control" rows="3" id="productDescriptionInput" placeholder="Entrer la description du produit"></textarea>
                            @error('description')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="category_id">Catégorie Produit:</label>
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="productPriceInput">Prix</label>
                            <input name="price" class="form-control" id="productPriceInput" type="number" placeholder="Entrer le prix du produit">
                            @error('price')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="productPricePromotionInput">Prix Promotion</label>
                            <input name="price_promotion" class="form-control" id="productPricePromotionInput" type="number" placeholder="Entrer le prix promotion du produit">
                            @error('price_promotion')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="productQuantityInput">Quantité</label>
                            <input name="qte" class="form-control" id="productQuantityInput" type="number">
                            @error('qte')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="productPhotoInput">Main Photo</label>
                            <input name="photo" class="form-control" id="productPhotoInput" type="file">
                            @error('photo')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="additional_photos">Autres Photos (optional):</label>
                            <input type="file" name="additional_photos[]" id="additional_photos" multiple>
                        </div>
                        
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-primary" type="submit">Ajouter</button>
                        <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Annuler</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @foreach ($products as $p)
        <!-- Modal modifier produit -->
        <div class="modal fade" id="editproduct{{ $p->id }}" tabindex="-1" aria-labelledby="editProductModalLabel{{ $p->id }}" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editProductModalLabel{{ $p->id }}">Modifier Produit: <span class="text-primary">{{ $p->name }}</span></h5>
                        <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close">
                            <span class="fas fa-times fs--1"></span>
                        </button>
                    </div>
                    <form action="/admin/product/update/{{ $p->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id_product" value="{{ $p->id }}">
                        <div class="modal-body">

                            <img src="{{ asset('uploads/' . $p->photo) }}" width="150">
                            <div class="mb-3">
                                <label class="form-label" for="editProductName{{ $p->id }}">Nom Produit</label>
                                <input name="name" class="form-control" id="editProductName{{ $p->id }}" type="text" value="{{ $p->name }}" placeholder="Entrer le nom du produit">
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label" for="editProductDescription{{ $p->id }}">Description</label>
                                <textarea name="description" class="form-control" rows="3" id="editProductDescription{{ $p->id }}" placeholder="Entrer la description du produit">{{ $p->description }}</textarea>
                                @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="editCategory{{ $p->id }}">Catégorie:</label>
                                <select name="category_id" id="editCategory{{ $p->id }}" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ $p->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="editProductPrice{{ $p->id }}">Prix</label>
                                <input name="price" class="form-control" id="editProductPrice{{ $p->id }}" type="number" value="{{ $p->price }}" placeholder="Entrer le prix du produit">
                                @error('price')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="editProductPricePromotion{{ $p->id }}">Prix Promotion</label>
                                <input name="price_promotion" class="form-control" id="editProductPricePromotion{{ $p->id }}" type="number" value="{{ $p->price_promotion }}" placeholder="Entrer le prix promotion du produit">
                                @error('price_promotion')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="editProductQuantity{{ $p->id }}">Quantité</label>
                                <input name="qte" class="form-control" id="editProductQuantity{{ $p->id }}" type="number" value="{{ $p->qte }}">
                                @error('qte')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="editProductPhoto{{ $p->id }}">Main Photo</label>
                                <input name="photo" class="form-control" id="editProductPhoto{{ $p->id }}" type="file">
                                @error('photo')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="editAdditionalPhotos{{ $p->id }}">Autres Photos (optional):</label>
                                <input type="file" name="additional_photos[]" id="editAdditionalPhotos{{ $p->id }}" multiple>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary" type="submit">Modifier</button>
                            <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Annuler</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <script src="{{ asset('dashassets/js/phoenix.js') }}"></script>
    <script src="{{ asset('dashassets/js/ecommerce-dashboard.js') }}"></script>
</body>

</html>
