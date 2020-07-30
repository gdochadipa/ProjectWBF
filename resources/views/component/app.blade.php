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

      @font-face {
        font-family: BarlowCondensed-ExtraLight;
        src: url('{{asset('font/BarlowCondensed-ExtraLight.ttf')}}');
      }

      @font-face {
        font-family: BarlowCondensed-Thin;
        src: url('{{asset('font/BarlowCondensed-Thin.ttf')}}');
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
      .footer{
        background-color: rgb(26, 26, 26) !important;
        color: #F8F9FA !important;
        
      }

      .footer h3{
        font-family: BarlowCondensed-Medium;
      }
      .footer p{
        font-family: BarlowCondensed-ExtraLight;
        font-weight: 100;
        font-size: 18px;
      }

      .cs{
        display: inline;
      }
      .cs h5{
        font-family: BarlowCondensed-Medium;
      }

      .cs p{
        font-family: BarlowCondensed-Thin;
        font-weight: 100;
        font-size: 15px;
        color: rgb(192, 192, 192);
      }

      .cs p i{
        font-size: 20px;
        margin: 0px 8px;
      }
      .cs .red{
        font-family: BarlowCondensed-Medium;
        color: #ED1B24;
      }
      
      .border-bottom{
        border-bottom: 0.05px solid #8d8d8d!important;
      }
      
      /* .container{
        max-width: 1250px;
      } */

      .banner h5{
        font-family: BarlowCondensed-Medium;
      }

      .red-insta{
        color:#ED1B24;
        font-family: BarlowCondensed-Medium;
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
  <div class="border-bottom" >
    <div class="container" >
      <div class="row my-2  py-4 ">
          <div class="col">
            <h3>CATEGORIES</h3>
            <p>Men</p>
            <p>Woman</p>
            <p>Child</p>
          </div>
          <div class="col">
            <h3>QUICK LINKS</h3>
            <p>Privacy Policy</p>
            <p>Terms & Conditions</p>
            
          </div>
          <div class="col">
            <h3>COMPANY</h3>
            <p>About Us</p>
            <p>Shopping Guide</p>
          </div>
          <div class="col">
            <div class="row row-cols-2">
              <div class="col-3">
                <img src="{{asset('asset/cs1.png')}}" alt="">
              </div>
              <div class="col-md-8 cs">
                  <h5 style="font-size: 17px !important">WE OFFER DEDICATED SUPPORT</h5>
                  <p>If you need support send us a message</p>
                </div>
            </div>
            <div class="row row-cols-2">
              <div class="col-3">
                <img src="{{asset('asset/cs2.png')}}" alt="">
              </div>
              <div class="col-md-8 cs">
                  <p style="margin-bottom: 5px !important">Got Question? Call Us</p>
                  <h5 class="red">+087860155999</h5>
                </div>
            </div>
          </div>
      </div>
  </div>
  </div>
  
  <div class="border-bottom">
    <div class="container">
       <div class="row my-2  py-4 ">
        <div class="col-3">
          <img src="{{asset('asset/wbf_logo.png')}}" alt="">
        </div>
        <div class="col-md-5 cs">
          <h5 style="font-size: 17px !important">STORE LOCATION</h5>
          <p>Jl. By Pass Ngurah Rai No.11H, Kuta Badung 
            <br>
            Bali, Indonesia
          </p>
          <p><i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-youtube" aria-hidden="true"></i>
            <i class="fa fa-google-plus-square" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </p>
          <p style="margin-bottom: 5px !important">Email: wbfkuta@gmail.com</p>
          
        </div>
        <div class="col cs">
          <h5 style="font-size: 17px !important">PAYMENT</h5>
          <p><img src="{{asset('asset/payment.png')}}" alt=""></p>
          
        </div>
        
    </div>

     </div>
    </div>
  </div>

  

   <div class="container">
      <div class="row my-1 py-4 ">
        <div class="row">
          <div class="col copyright">
            Copyright
          </div>
       </div>
     </div>
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