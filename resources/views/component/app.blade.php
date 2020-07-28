<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('style/css/bootstrap.min.css')}}" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('style/owl/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('style/owl/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title> @yield('title')</title>
    <style>
      @font-face {
        font-family: BarlowCondensed-ExtraBold;
        src: url('{{asset('font/BarlowCondensed-ExtraBold.ttf')}}');
      }

      @font-face {
        font-family: BarlowCondensed-BoldItalic;
        src: url('{{asset('font/BarlowCondensed-BoldItalic.ttf')}}');
      }

      @font-face {
        font-family: BarlowCondensed-Italic;
        src: url('{{asset('font/BarlowCondensed-Italic.ttf')}}');
      }

      @font-face {
        font-family: BarlowCondensed-Light;
        src: url('{{asset('font/BarlowCondensed-Light.ttf')}}');
      }

      @font-face {
        font-family: BarlowCondensed-Regular;
        src: url('{{asset('font/BarlowCondensed-Regular.ttf')}}');
      }

      @font-face {
        font-family: BarlowCondensed-Bold;
        src: url('{{asset('font/BarlowCondensed-Bold.ttf')}}');
      }

      @font-face {
        font-family: BarlowCondensed-Medium;
        src: url('{{asset('font/BarlowCondensed-Medium.ttf')}}');
      }
      
      h1{
        font-family: BarlowCondensed-ExtraBold;
      }

      .title{
        font-family: BarlowCondensed-BoldItalic;
      }

      .carousel-content p{
      
      font-family: BarlowCondensed-Italic;
      }

      .nav a{
        font-size: 20px;
        font-family: BarlowCondensed-Medium;
        color: black !important;
      }

      .nav a:hover{
        color: black !important;
      }

      .btn{
        border-radius: 0;
        font-family:  BarlowCondensed-Medium;
        font-size: 20px;
      }

      .search{
        color: black !important;
        border: none;
      }

      .search:hover{
        background-color: #F8F9FA !important;
        border: none;
      }

      .card{
        font-family: BarlowCondensed-Medium;
      }

      .item-category{
        font-family: BarlowCondensed-Light;
      }
      .price{
        font-family: BarlowCondensed-Regular;
      }
    </style>
  </head>
  <body>
  <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
    <a class="navbar-brand px-5 border-right" href="#"><img src="{{asset('asset/image.png')}}" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item nav mx-3">
          <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item nav mx-3">
          <a class="nav-link" href="#">BRAND</a>
        </li>
        <li class="nav-item nav mx-3">
          <a class="nav-link" href="#">MEN</a>
        </li>
        <li class="nav-item nav mx-3">
          <a class="nav-link" href="#">WOMAN</a>
        </li>
        <li class="nav-item nav mx-3">
          <a class="nav-link" href="#">CHILD</a>
        </li>
        <li class="nav-item nav mx-3">
          <a class="nav-link text-d"style="color:#ED1B24 !important" href="#">ON SALE</a>
        </li>
      </ul>
      
    </div>
    <form class="form-inline  mx-2 px-3 py-3  border-left">
        <button class="btn btn-outline-success search" type="submit"><i class="fa fa-search" aria-hidden="true"></i> SEARCH</button>
      </form>
</nav>

    @yield('component')

<footer class="footer mt-auto py-3">
  <div class="container">
    <span class="text-muted">Place sticky footer content here.</span>
  </div>
</footer>
  </body>
  <script src="{{asset('style/js/jquery-3.5.1.slim.min.js')}}" ></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="{{asset('style/js/bootstrap.min.js')}}" ></script>
    <script src="{{asset('style/js//owl.carousel.min.js')}}"></script>
    @yield('script')
</html>