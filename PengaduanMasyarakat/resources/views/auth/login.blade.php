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

    <title>Halaman Login</title>

     <!-- vendor css -->
     <link href="{{asset('user2/lib/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link href="{{asset('user2/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('user2/lib/typicons.font/typicons.css')}}" rel="stylesheet">
    

    <!-- azia CSS -->
    <link rel="stylesheet" href="{{asset('user2/css/azia.css')}}">

  </head>
  <body class="az-body">
  @include('sweetalert::alert')
    <div class="az-signin-wrapper">
      <div class="az-card-signin">
      <img src="{{asset('user2/img/logo.png')}}" alt="" class="mb-2" width="90px">
        <!-- <h1 class="az-logo">az<span>i</span>a</h1> -->
        <div class="az-signin-header">
          <h2>Selamat datang!</h2>
          <h4>Silahkan Login Terlebih Dahulu</h4>

          <form  method="POST" action="{{ route('login') }}">
          @csrf  
            <div class="form-group">
              <label>Email</label>
              <input type="text" class="form-control" name="email" placeholder="Enter your email" >
            </div><!-- form-group -->
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="password" placeholder="Enter your password" >
            </div><!-- form-group -->
            <button type="submit" class="btn btn-az-primary btn-block">Sign In</button>
          </form>
        </div><!-- az-signin-header -->
        <div class="az-signin-footer">
          <!-- <p><a href="">Forgot password?</a></p> -->
          <p>Belum punya akun? <a href="{{ route('register') }}">Silahkan Registrasi</a></p>
        </div><!-- az-signin-footer -->
      </div><!-- az-card-signin -->
    </div><!-- az-signin-wrapper -->

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
