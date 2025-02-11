<!DOCTYPE html>
<html lang="tr">
  <head>
    <title>E-Ticaret &mdash; Butik Giyim</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('../frontend/shoppers-gh-pages/https://fonts.googleapis.com/css?family=Mukta:300,400,700') }}">
    <link rel="stylesheet" href="{{ asset('../frontend/shoppers-gh-pages/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('../frontend/shoppers-gh-pages/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../frontend/shoppers-gh-pages/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('../frontend/shoppers-gh-pages/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('../frontend/shoppers-gh-pages/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../frontend/shoppers-gh-pages/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('../frontend/shoppers-gh-pages/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('../frontend/shoppers-gh-pages/css/style.css') }}">

  </head>
  <body>

  <div class="site-wrap">
@include('frontend.inc.header')

@yield('content')

@include('frontend.inc.footer')
  </div>

  <script src="{{ asset('../frontend/shoppers-gh-pages/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('../frontend/shoppers-gh-pages/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('../frontend/shoppers-gh-pages/js/popper.min.js') }}"></script>
  <script src="{{ asset('../frontend/shoppers-gh-pages/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('../frontend/shoppers-gh-pages/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('../frontend/shoppers-gh-pages/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('../frontend/shoppers-gh-pages/js/aos.js') }}"></script>
  @yield('customjs')
  <script src="{{ asset('../frontend/shoppers-gh-pages/js/main.js') }}"></script>

  </body>
</html>
