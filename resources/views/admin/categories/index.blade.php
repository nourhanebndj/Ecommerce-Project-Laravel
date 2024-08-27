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
    <link href="{{ asset('dashassets/css/phoenix.min.css') }} " rel="stylesheet" id="style-default">
    <link href="{{ asset('dashassets/css/user.min.css') }} " rel="stylesheet" id="user-style-default">
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
              <h4>Listes des catégories</h4>
              <hr>
                <a  data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary mt-3">Ajouter Catégorie</a>
            <div class="mt-3">
              <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom de catégorie</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $index => $c)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th> 
                        <td>{{ $c->name }}</td>
                        <td>{{ $c->description }}</td>
                        <td>
                          <a data-bs-toggle="modal" data-bs-target="#editCategory{{$c->id}}" class="btn btn-success">Modifier</a>
                          <a onclick="return confirm('Voulez vous vraiment supprimer cette catégorie?')" href="/admin/category/{{$c->id}}/delete" class="btn btn-danger">Supprimer</a>

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
    </main>


<!-- Modal ajouter categorie-!-->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter Catégorie</h5><button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close"><span class="fas fa-times fs--1"></span></button>
      </div>
      <form action="/admin/category/store" method="POST">
        @csrf
      <div class="modal-body">
          <div class="mb-3">
            <label class="form-label" for="exampleFormControlInput1">Nom Catégories</label> 
            <input  name="name"class="form-control" id="exampleFormControlInput1" type="text" placeholder="Entrer le nom du catégories"></div>
          @error('name')
          <div class="alert alert-danger">
          {{$message}}
          </div>
          @enderror
                          <div class="mb-0">
            <label class="form-label" for="exampleTextarea">Description</label> 
          
            <textarea name="description" class="form-control"  rows="3"> 
              </textarea>
              @error('description')
          <div class="alert alert-danger">
          {{$message}}
          </div>
          @enderror
            </div>
      </div>
      <div class="modal-footer"><button class="btn btn-primary" type="submit">Ajouter</button>
        <button class="btn btn-outline-primary" type="button" data-bs-dismiss="modal">Annuler</button>
      </div>       
     </form>
    </div>
  </div>
</div>

      @foreach($categories as $index => $c)
      <!-- Modal modifier categorie -->
      <div class="modal fade" id="editCategory{{$c->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modifier Catégorie:<span class="text-primary"> {{ $c->name }} </span></h5>
              <button class="btn p-1" type="button" data-bs-dismiss="modal" aria-label="Close">
                <span class="fas fa-times fs--1"></span>
              </button>
            </div>
            <form action="/admin/category/update" method="POST">
              @csrf
              <div class="modal-body">
                <div class="mb-3">
                  <label class="form-label" for="categoryName{{$c->id}}">Nom Catégorie</label> 
                  <input name="name" class="form-control" id="categoryName{{$c->id}}" type="text" value="{{ $c->name }}" placeholder="Entrer le nom de la catégorie">
                  @error('name')
                    <div class="alert alert-danger">
                      {{$message}}
                    </div>
                  @enderror
                </div>
                <div class="mb-0">
                  <label class="form-label" for="categoryDescription{{$c->id}}">Description</label>
                  <textarea name="description" class="form-control"  rows="3" placeholder="Entrer la description de la catégorie">{{ $c->description }}</textarea>
                  @error('description')
                    <div class="alert alert-danger">
                      {{$message}}
                    </div>
                  @enderror
                </div>
              </div>
              <input type="hidden" value="{{$c->id}}" name="id_category">
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
    <script src= "{{ asset('dashassets/js/ecommerce-dashboard.js') }}"></script>
  </body>

</html>