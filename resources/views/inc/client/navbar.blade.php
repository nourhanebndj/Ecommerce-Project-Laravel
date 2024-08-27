<nav class="navbar navbar-light navbar-top navbar-expand">
    <div class="navbar-logo"><button class="btn navbar-toggler navbar-toggler-humburger-icon" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
       <a class="navbar-brand me-1 me-sm-3" href="/admin/dashboard">
        <div class="d-flex align-items-center">
          <div class="d-flex align-items-center">
            <img src="{{asset('mainassets/images/logo_white.png')}}" alt="EcommerceDz Logo" class="logo-desktop" style="width: 100px; height: 100px;">
          </div>
        </div>
      </a></div>
    <div class="collapse navbar-collapse">
      <div class="search-box d-none d-lg-block" style="width:25rem;">
        <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input class="form-control form-control-sm search-input search min-h-auto" type="search" placeholder="Search..." aria-label="Search"> <span class="fas fa-search search-box-icon"></span></form>
      </div>
      <ul class="navbar-nav navbar-nav-icons ms-auto flex-row">
        <li class="nav-item dropdown"><a class="nav-link" id="navbarDropdownNindeDots" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg width="16" height="16" viewbox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
              <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
              <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
              <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
              <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
              <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
              <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
              <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
              <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
            </svg></a>
          <div class="dropdown-menu dropdown-menu-end py-0 dropdown-nide-dots shadow border border-300" aria-labelledby="navbarDropdownNindeDots">
            <div class="card bg-white position-relative border-0">
              <div class="card-body pt-3 px-3 pb-0 overflow-auto scrollbar" style="height: 20rem;">
                <div class="row text-center align-items-center gx-0 gy-0">
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/linkedin.png" alt="" width="30">
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Linkedin</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/google-maps.png" alt="" width="30">
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Github</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/google-photos.png" alt="" width="30">
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Facebook</p>
                    </a></div>
                  <div class="col-4"><a class="d-block hover-bg-200 p-2 rounded-3 text-center text-decoration-none mb-3" href="#!" target="_blank"><img src="assets/img/nav-icons/spotify.png" alt="" width="30">
                      <p class="mb-0 text-black text-truncate fs--2 mt-1 pt-1">Whatsapp</p>
                    </a></div>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link lh-1 px-0 ms-5" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="avatar avatar-l">
                  <img class="rounded-circle" src="{{ asset('assets/img/team/57.png') }}" alt="">
              </div>
          </a>
          <div class="dropdown-menu dropdown-menu-end py-0 dropdown-profile shadow border border-300" aria-labelledby="navbarDropdownUser">
              <div class="card bg-white position-relative border-0">
                  <div class="card-body p-0 overflow-auto scrollbar" style="height: 18rem;">
                      <div class="text-center pt-4 pb-3">
                          <div class="avatar avatar-xl">
                              <img class="rounded-circle" src="{{ asset('assets/img/team/57.png') }}" alt="">
                          </div>
                          <h6 class="mt-2">Profile</h6>
                      </div>
                      <ul class="nav d-flex flex-column mb-2 pb-1">
                          <li class="nav-item">
                              <a class="nav-link px-3" href="/client/profile">
                                  <span class="me-2 text-900" data-feather="user"></span>Profile
                              </a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link px-3" href="/client/dashboard">
                                  <span class="me-2 text-900" data-feather="pie-chart"></span>Dashboard
                              </a>
                          </li>
                      </ul>
                  </div>
                  <div class="card-footer p-0 border-top">
                      <ul class="nav d-flex flex-column my-3">
                          <li class="nav-item">
                              <a class="nav-link px-3" href="/guest/home">
                                  <span class="me-2 text-900" data-feather="globe"></span>Voir le site
                              </a>
                          </li>
                      </ul>
                      <hr>
                      <div class="px-3">
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                          <a class="btn btn-phoenix-secondary d-flex flex-center w-100" href="{{ route('logout') }}" 
                             onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                              <span class="me-2" data-feather="log-out"></span>Sign out
                          </a>
                      </div>
                      <div class="my-2 text-center fw-bold fs--2 text-600">
                          <a class="text-600 me-1" href="#!">Privacy policy</a>&bull;
                          <a class="text-600 mx-1" href="#!">Terms</a>&bull;
                          <a class="text-600 ms-1" href="#!">Cookies</a>
                      </div>
                  </div>
              </div>
          </div>
      </li>
      
      </ul>
    </div>
  </nav>