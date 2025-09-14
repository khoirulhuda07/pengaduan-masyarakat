<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <!-- <meta name="twitter:site" content="@bootstrapdash">
    <meta name="twitter:creator" content="@bootstrapdash">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Azia">
    <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="twitter:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png"> -->

    <!-- Facebook -->
    <!-- <meta property="og:url" content="https://www.bootstrapdash.com/azia">
    <meta property="og:title" content="Azia">
    <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">

    <meta property="og:image" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:secure_url" content="https://www.bootstrapdash.com/azia/img/azia-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600"> -->

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Halaman @yield('title')</title>

    <!-- vendor css -->
    <link href="{{asset('user2/lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('user2/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('user2/lib/typicons.font/typicons.css')}}" rel="stylesheet">
    <link href="{{asset('user2/lib/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="{{asset('user2/css/azia.css')}}">

  </head>
  <body>
  @include('sweetalert::alert')

    <div class="az-header">
      <div class="container">
        <div class="az-header-left">
        <a href="#" class="az-logo"><span></span>DPMPTSP Lamongan</a>
          <a href="" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
          <div class="az-header-menu-header">
          <img src="{{asset('user2/img/logo.png')}}" class="az-logo" style="" width="50px" alt="">
            <a href="" class="close">&times;</a>
          </div><!-- az-header-menu-header -->
          <ul class="nav">
          @if(auth::check() && auth::user()->level == 'user')
            <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
              <a href="{{url('/')}}" class="nav-link"><i class="typcn typcn-chart-area-outline"></i> Dashboard</a>
            </li>
            <li class="nav-item {{ Request::is('pengaduan') ? 'active' : '' }}">
              <a href="{{url('/pengaduan')}}" class="nav-link"><i class="typcn typcn-document"></i>Pengaduan</a>
            </li>
            @else
            @endif
            @if(auth::check() && (auth::user()->level == 'user'||auth::user()->level == 'petugas'))
            <li class="nav-item {{ Request::is('riwayat') ? 'active' : '' }}">
              <a href="{{url('/riwayat')}}" class="nav-link"><i class="typcn typcn-document"></i>Riwayat Pengaduan</a>
            </li>
            @else
            @endif
            @if(auth::check() && auth::user()->level == 'admin')
            <li class="nav-item {{ Request::is('akun') ? 'active' : '' }}">
              <a href="{{url('/akun')}}" class="nav-link"><i class="typcn typcn-document"></i>Kelola Akun</a>
            </li>
            @else
            @endif
          </ul>
        </div><!-- az-header-menu -->
        <div class="az-header-right">
          <div class="dropdown az-profile-menu">
            @if(empty(Auth::user()->foto))
            <a href="" class="az-img-user"><img src="{{asset('user2/img/no_foto.jpg')}}" alt=""></a>
            @else
            <a href="" class="az-img-user"><img src="{{asset('storage/photo_user/'.Auth::user()->foto)}}" alt=""></a>
            @endif
            <div class="dropdown-menu">
            <div class="az-dropdown-header d-sm-none">
                <a href="" class="az-header-arrow"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
              </div>
              <div class="az-header-profile">
                <div class="az-img-user">
                @if (empty(Auth::user()->foto))
                <img src="{{asset('user2/img/no_foto.jpg')}}" alt="">
                @else
                  <img src="{{asset('storage/photo_user/'.Auth::user()->foto)}}" alt="">
                  @endif
                </div><!-- az-img-user -->
                <h6>{{Auth::user()->name}}</h6>
                <!-- <span>Premium Member</span> -->
              </div><!-- az-header-profile -->

              <a href="{{url('/profile')}}"  class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
           
              <a href="{{ route('logout') }}" onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Log Out</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
            </div><!-- dropdown-menu -->
          </div>
        </div><!-- az-header-right -->
      </div><!-- container -->
    </div><!-- az-header -->