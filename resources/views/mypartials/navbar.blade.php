<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path
            d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
    </symbol>
</svg>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light"
    style="background-color: #00A65B !important;height: 11vh;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars text-light"></i></a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    {{-- <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form> --}}


    @if (Auth::user()->hasRole('dinas'))
    <form class="form-inline ml-2" action="/profil/admin" method="GET">
        <div class="input-group" style="width: 50vw">
            <input class="form-control form-control-navbar" type="search"
                placeholder="Search NPSN, sekolah id, nama sekolah" aria-label="Search"
                style="height: 2.5rem;font-size: 15px;padding: 0 10px;" name="search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit" style="width: 40px;">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </form>
    @endif


    {{-- <form action="/logout" method="post">
      @csrf
      <button type="submit" class="btn btn-danger">Logout</button>
    </form> --}}

    <!-- Right navbar links -->

    <ul class="navbar-nav ml-auto">
        <div class="nav-item container d-block">
            <div class="container p-0 d-flex justify-content-end">
                <span class="text-white text-right font-weight-bold" style="font-size: 20px">{{ Auth::user()->name }}</span>
            </div>


        </div>
        <li class="nav-item dropdown">
            <a class="nav-link mr-2" data-toggle="dropdown" href="#" style="padding: 0;">
                <img src="/assets/img/avatars/TarunaBhaktiLogo.png" alt="TarunaBhakti Logo"
                    class="brand-image img-circle bg-white" width="33" style="opacity: .8">
            </a>
            <div class="dropdown-menu float-right">
                <a class="dropdown-item" tabindex="-1" href="#" style="color: grey"><i class="bi bi-pencil-square"
                        style="width: 20px"></i> Ubah Password</a>
                <a class="dropdown-item" tabindex="-1" href="/upload-logo" style="color: grey"><i class="bi bi-image"
                        style="width: 20px"></i> Tambah Logo</a>
                <div class="dropdown-divider"></div>
                <form action="/logout" method="post">
                    @csrf
                    <button class="dropdown-item" tabindex="-1" type="submit"
                        style="border: none; background: none; color: grey;"><i class="bi bi-box-arrow-left"
                            style="width: 20px"></i> Keluar</button>
                </form>
            </div>
        </li>
    </ul>

    <div class="alert alert-warning d-flex align-items-center" role="alert" style="position: absolute; top: 13vh; right: 1vw; border-radius: 30px; height: 40px;">
        <svg class="bi flex-shrink-0 me-2 mr-2" width="15" height="15" role="img" aria-label="Warning:"
            style="color: white">
            <use xlink:href="#exclamation-triangle-fill" /></svg>
        <div class="text-white" style="font-size: 14px">
            Masuk Sebagai {{ Auth::user()->getRoleNames()[0] }}
        </div>
    </div>
</nav>
<!-- /.navbar -->
