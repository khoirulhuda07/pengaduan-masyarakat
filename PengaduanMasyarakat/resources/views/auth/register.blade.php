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

  

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Azia Responsive Bootstrap 4 Dashboard Template</title>

   <!-- vendor css -->
   <link href="{{asset('user2/lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('user2/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('user2/lib/typicons.font/typicons.css')}}" rel="stylesheet">
    <link href="{{asset('user2/lib/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="{{asset('user2/css/azia.css')}}">

  </head>
  <body class="az-body">
  @include('sweetalert::alert')
    <div class="az-signup-wrapper">
      <div class="az-column-signup-left">
        <div>
          <img src="{{asset('user2/img/logo.png')}}" alt="" class="mb-2" width="90px">
          <!-- <h1 class="az-logo">az<span>i</span>a</h1> -->
          <h5>Aplikasi Pengaduan Masyarakat Lamongan</h5>
          <p>Selamat datang di sistem pengaduan masyarakat Kabupaten Lamongan.
Kami hadir untuk memberikan kemudahan kepada masyarakat dalam menyampaikan laporan, keluhan, maupun aspirasi kepada instansi terkait secara cepat dan transparan.

Melalui aplikasi ini, kami berharap dapat meningkatkan kualitas pelayanan publik serta membangun komunikasi yang lebih baik antara pemerintah dan masyarakat.</p>
          <p>🔍 Telusuri fitur kami dan mulai sampaikan pengaduan Anda sekarang juga!</p>
          <!-- <a href="index.html" class="btn btn-outline-indigo">Learn More</a> -->
        </div>
      </div><!-- az-column-signup-left -->
      <div class="az-column-signup">
        <!-- <h1 class="az-logo">az<span>i</span>a</h1> -->
        <div class="az-signup-header">
          <h2>Daftar Sekarang</h2>
          <h4>Gratis dan hanya memerlukan satu menit untuk mendaftar.</h4>

          <form method="POST" action="{{ route('register') }}">
                        @csrf
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" name="name" placeholder="Enter your firstname and lastname">
            </div><!-- form-group -->
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" name="email" placeholder="Enter your email">
            </div><!-- form-group -->
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="password" placeholder="Enter your password">
            </div><!-- form-group -->
            <div class="form-group">
              <label>Konfirmasi Password</label>
              <input type="password" class="form-control" name="password_confirmation" placeholder="Enter your password">
            </div><!-- form-group -->
            <button  type="submit" class="btn btn-az-primary btn-block">Create Account</button>
           
          </form>
        </div><!-- az-signup-header -->
        <div class="az-signup-footer">
          <p>Already have an account? <a href="{{'/login'}}">Sign In</a></p>
        </div><!-- az-signin-footer -->
      </div><!-- az-column-signup -->
    </div><!-- az-signup-wrapper -->

    <script src="{{asset('user2/lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('user2/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('user2/lib/ionicons/ionicons.js')}}"></script>
    <script src="{{asset('user2/js/jquery.cookie.js')}}" type="text/javascript"></script>

    <script src="{{asset('user2/js/azia.js')}}"></script>
    <script>
      $(function(){
        'use strict'

      });
    </script>
  </body>
</html>
