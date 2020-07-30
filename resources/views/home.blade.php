@extends('component.app')
@section('title')
    Home
@endsection
@section('component')
<link rel="stylesheet" href="{{asset('style/css/home_style.css')}}">
<main role="main" class="bg-light">

<div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
       <img src="{{asset('asset/slide.png')}}" class="d-block w-100" alt="...">
       
      
    </div>
    <div class="carousel-item">
      <img src="{{asset('asset/slide.png')}}" class="d-block w-100" alt="...">
      
    </div>
    <div class="carousel-item">
      <img src="{{asset('asset/slide.png')}}" class="d-block w-100" alt="...">
      
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <div class="carousel-content">
        <h1 class="title">Welcome To <span class="text-info">WBF</span></h1>
        <p class="p-1 danger text-white" style="font-size: 20px"><i>WORLD BRAND FASION, KUTA - BALI</i></p>
      </div>
</div>
<div class="container-fluid py-2 my-5 h-100">
  <div class="row text-center justify-content-center">
    <h1 class="caption">
      NEW ARRIVALS
    </h1>
  </div>
  <div class="row text-center justify-content-center">
    <img src="{{asset('asset/red-line.png')}}" alt="">
  </div>
</div>

<div class="container-fluid py-h">
  <div class="row">
    <div class="one-carousel owl-carousel owl-theme">
      <div class="item">
        <div class="card mb-4 mx-1 border-1">
            <div class="card-head m-2 border-bottom">
              <img src="{{asset('asset/item1.png')}}" class="bd-placeholder-img card-img-top"  width="100%" height="290" alt="">
              <button class="btn btn-black" style="width: 100%" >READ MORE</button>
              <p class="stock mt-3">In Stock:</p>
            </div>
            <div class="card-body">
              <p class="item-title">COLLAR WOOL JACKET</p>
              <p class="item-category">Men, Jacket</p>
              <h3 class="price">IDR 500.000</h3>
            </div>
          </div>
      </div>
      <div class="item">
        <div class="card mb-4 mx-1 border-1">
            <div class="card-head m-2 border-bottom">
              <img src="{{asset('asset/item1.png')}}" class="bd-placeholder-img card-img-top"  width="100%" height="290" alt="">
              <button class="btn btn-black" style="width: 100%" >READ MORE</button>
              <p class="stock mt-3">In Stock:</p>
            </div>
            <div class="card-body">
              <p class="item-title">COLLAR WOOL JACKET</p>
              <p class="item-category">Men, Jacket</p>
              <h3 class="price">IDR 500.000</h3>
            </div>
          </div>
      </div>
      <div class="item">
        <div class="card mb-4 mx-1 border-1">
            <div class="card-head m-2 border-bottom">
              <img src="{{asset('asset/item1.png')}}" class="bd-placeholder-img card-img-top"  width="100%" height="290" alt="">
              <button class="btn btn-black" style="width: 100%" >READ MORE</button>
              <p class="stock mt-3">In Stock:</p>
            </div>
            <div class="card-body">
              <p class="item-title">COLLAR WOOL JACKET</p>
              <p class="item-category">Men, Jacket</p>
              <h3 class="price">IDR 500.000</h3>
            </div>
          </div>
      </div>
      <div class="item">
        <div class="card mb-4 mx-1 border-1">
            <div class="card-head m-2 border-bottom">
              <img src="{{asset('asset/item1.png')}}" class="bd-placeholder-img card-img-top"  width="100%" height="290" alt="">
              <button class="btn btn-black" style="width: 100%" >READ MORE</button>
              <p class="stock mt-3">In Stock:</p>
            </div>
            <div class="card-body">
              <p class="item-title">COLLAR WOOL JACKET</p>
              <p class="item-category">Men, Jacket</p>
              <h3 class="price">IDR 500.000</h3>
            </div>
          </div>
      </div>
      <div class="item">
        <div class="card mb-4 mx-1 border-1">
            <div class="card-head m-2 border-bottom">
              <img src="{{asset('asset/item1.png')}}" class="bd-placeholder-img card-img-top"  width="100%" height="290" alt="">
              <button class="btn btn-black" style="width: 100%" >READ MORE</button>
              <p class="stock mt-3">In Stock:</p>
            </div>
            <div class="card-body">
              <p class="item-title">COLLAR WOOL JACKET</p>
              <p class="item-category">Men, Jacket</p>
              <h3 class="price">IDR 500.000</h3>
            </div>
          </div>
      </div>
      <div class="item">
        <div class="card mb-4 mx-1 border-1">
            <div class="card-head m-2 border-bottom">
              <img src="{{asset('asset/item1.png')}}" class="bd-placeholder-img card-img-top"  width="100%" height="290" alt="">
              <button class="btn btn-black" style="width: 100%" >READ MORE</button>
              <p class="stock mt-3">In Stock:</p>
            </div>
            <div class="card-body">
              <p class="item-title">COLLAR WOOL JACKET</p>
              <p class="item-category">Men, Jacket</p>
              <h3 class="price">IDR 500.000</h3>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div style="margin: 15px 0; background-image: url('{{asset('asset/banner1.png')}}');" class="img-fluid w-100 p-4 h-auto d-inline-block" >

  <div class="row my-5 p-4 mx-2">
      <div class="col banner">
        <h5 style="color: white">
          STOREWIDE SALE UP TO
        </h5>
        <h1 style="color: white; font-size: 90px">
          90% OFF
        </h1>
      </div>
      <div class="col">
       <div class="float-right d-flex justify-content-center" style="margin: 0px auto;">
          <button type="button" class="btn danger btn-lg btn-go">GO TO SALE <i class="fa fa-arrow-right" style="color:white" aria-hidden="true"></i></button>
       </div>
      </div>
    </div>
</div>

<div class="container-fluid py-2 my-5  h-100">
  <div class="row text-center justify-content-center">
    <h1 class="caption">
      FOR YOU
    </h1>
  </div>
  <div class="row text-center justify-content-center">
    <img src="{{asset('asset/red-line.png')}}" alt="">
  </div>
</div>

  <div class="album py-2 bg-light">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-3">
          <div class="card mb-4 mx-1 border-1">
            <div class="card-head m-2 border-bottom">
              <img src="{{asset('asset/item1.png')}}" class="bd-placeholder-img card-img-top"  width="100%" height="290" alt="">
              <button class="btn btn-black" style="width: 100%" >READ MORE</button>
              <p class="stock mt-3">In Stock:</p>
            </div>
            <div class="card-body">
              <p class="item-title">COLLAR WOOL JACKET</p>
              <p class="item-category">Men, Jacket</p>
              <h3 class="price">IDR 500.000</h3>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4 mx-1 border-1">
            <div class="card-head m-2 border-bottom">
              <img src="{{asset('asset/item1.png')}}" class="bd-placeholder-img card-img-top"  width="100%" height="290" alt="">
              <button class="btn btn-black" style="width: 100%" >READ MORE</button>
              <p class="stock mt-3">In Stock:</p>
            </div>
            <div class="card-body">
              <p class="item-title">COLLAR WOOL JACKET</p>
              <p class="item-category">Men, Jacket</p>
              <h3 class="price">IDR 500.000</h3>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4 mx-1 border-1">
            <div class="card-head m-2 border-bottom">
              <img src="{{asset('asset/item1.png')}}" class="bd-placeholder-img card-img-top"  width="100%" height="290" alt="">
              <button class="btn btn-black" style="width: 100%" >READ MORE</button>
              <p class="stock mt-3">In Stock:</p>
            </div>
            <div class="card-body">
              <p class="item-title">COLLAR WOOL JACKET</p>
              <p class="item-category">Men, Jacket</p>
              <h3 class="price">IDR 500.000</h3>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card mb-4 mx-1 border-1">
            <div class="card-head m-2 border-bottom">
              <img src="{{asset('asset/item1.png')}}" class="bd-placeholder-img card-img-top"  width="100%" height="290" alt="">
              <button class="btn btn-black" style="width: 100%" >READ MORE</button>
              <p class="stock mt-3">In Stock:</p>
            </div>
            <div class="card-body">
              <p class="item-title">COLLAR WOOL JACKET</p>
              <p class="item-category">Men, Jacket</p>
              <h3 class="price">IDR 500.000</h3>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4 ml-1 border-1">
            <div class="card-head m-2 border-bottom">
              <img src="{{asset('asset/item1.png')}}" class="bd-placeholder-img card-img-top"  width="100%" height="290" alt="">
              <button class="btn btn-black" style="width: 100%" >READ MORE</button>
              <p class="stock mt-3">In Stock:</p>
            </div>
            <div class="card-body">
              <p class="item-title">COLLAR WOOL JACKET</p>
              <p class="item-category">Men, Jacket</p>
              <h3 class="price">IDR 500.000</h3>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4 ml-1 border-1">
            <div class="card-head m-2 border-bottom">
              <img src="{{asset('asset/item1.png')}}" class="bd-placeholder-img card-img-top"  width="100%" height="290" alt="">
              <button class="btn btn-black" style="width: 100%" >READ MORE</button>
              <p class="stock mt-3">In Stock:</p>
            </div>
            <div class="card-body">
              <p class="item-title">COLLAR WOOL JACKET</p>
              <p class="item-category">Men, Jacket</p>
              <h3 class="price">IDR 500.000</h3>
            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card mb-4 ml-1 border-1">
            <div class="card-head m-2 border-bottom">
              <img src="{{asset('asset/item1.png')}}" class="bd-placeholder-img card-img-top"  width="100%" height="290" alt="">
              <button class="btn btn-black" style="width: 100%" >READ MORE</button>
              <p class="stock mt-3">In Stock:</p>
            </div>
            <div class="card-body">
              <p class="item-title">COLLAR WOOL JACKET</p>
              <p class="item-category">Men, Jacket</p>
              <h3 class="price">IDR 500.000</h3>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4 ml-1 border-1">
            <div class="card-head m-2 border-bottom">
              <img src="{{asset('asset/item1.png')}}" class="bd-placeholder-img card-img-top"  width="100%" height="290" alt="">
              <button class="btn btn-black" style="width: 100%" >READ MORE</button>
              <p class="stock mt-3">In Stock:</p>
            </div>
            <div class="card-body">
              <p class="item-title">COLLAR WOOL JACKET</p>
              <p class="item-category">Men, Jacket</p>
              <h3 class="price">IDR 500.000</h3>
            </div>
        </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4 ml-1 border-1">
            <div class="card-head m-2 border-bottom">
              <img src="{{asset('asset/item1.png')}}" class="bd-placeholder-img card-img-top"  width="100%" height="290" alt="">
              <button class="btn btn-black" style="width: 100%" >READ MORE</button>
              <p class="stock mt-3">In Stock:</p>
            </div>
            <div class="card-body">
              <p class="item-title">COLLAR WOOL JACKET</p>
              <p class="item-category">Men, Jacket</p>
              <h3 class="price">IDR 500.000</h3>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4 ml-1 border-1">
            <div class="card-head m-2 border-bottom">
              <img src="{{asset('asset/item1.png')}}" class="bd-placeholder-img card-img-top"  width="100%" height="290" alt="">
              <button class="btn btn-black" style="width: 100%" >READ MORE</button>
              <p class="stock mt-3">In Stock:</p>
            </div>
            <div class="card-body">
              <p class="item-title">COLLAR WOOL JACKET</p>
              <p class="item-category">Men, Jacket</p>
              <h3 class="price">IDR 500.000</h3>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4 ml-1 border-1">
            <div class="card-head m-2 border-bottom">
              <img src="{{asset('asset/item1.png')}}" class="bd-placeholder-img card-img-top"  width="100%" height="290" alt="">
              <button class="btn btn-black" style="width: 100%" >READ MORE</button>
              <p class="stock mt-3">In Stock:</p>
            </div>
            <div class="card-body">
              <p class="item-title">COLLAR WOOL JACKET</p>
              <p class="item-category">Men, Jacket</p>
              <h3 class="price">IDR 500.000</h3>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card mb-4 ml-1 border-1">
            <div class="card-head m-2 border-bottom">
              <img src="{{asset('asset/item1.png')}}" class="bd-placeholder-img card-img-top"  width="100%" height="290" alt="">
              <button class="btn btn-black" style="width: 100%" >READ MORE</button>
              <p class="stock mt-3">In Stock:</p>
            </div>
            <div class="card-body">
              <p class="item-title">COLLAR WOOL JACKET</p>
              <p class="item-category">Men, Jacket</p>
              <h3 class="price">IDR 500.000</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="container-fluid py-2 my-5  h-100">
  <div class="row text-center justify-content-center">
     <button type="button" class="btn danger btn-lg btn-see" style=""><span style="font-size: 20px"> SEE ALL PRODUCT  </span> </button>
  </div>
  <div class="row text-center justify-content-center">
    
  </div>
</div>

<div style="margin: 20px 0; background-image: url('{{asset('asset/banner2.png')}}');" class="img-fluid w-100 pt-3 px-3 pb-1 h-100 d-inline-block" >
  <div class="container-fluid pb-5 pt-2 mb-5   mt-5 " style="height: 150%">
    <div class="row text-center align-text-top justify-content-center">
      <h1 style="color: #f0f0f0" class="caption">
        BRANDS
      </h1>
    </div>
    <div class="row text-center justify-content-center">
      <img src="{{asset('asset/red-line.png')}}" alt="">
    </div>
  </div>
  <div class="brand-content">
    <div class="card">
      <div class="card-body">
        <div class=" two-carousel owl-carousel owl-theme ">
          <div class="item"><img src="{{asset('asset/1.png')}}" alt=""></div>
          <div class="item"><img src="{{asset('asset/2.png')}}" alt=""></div>
          <div class="item"><img src="{{asset('asset/3.png')}}" alt=""></div>
          <div class="item"><img src="{{asset('asset/4.png')}}" alt=""></div>
          <div class="item"><img src="{{asset('asset/5.png')}}" alt=""></div>
          <div class="item"><img src="{{asset('asset/6.png')}}" alt=""></div>
          
      </div>
      </div>
    </div>
  </div>
</div>


<div class="container-fluid-fluid py-5 my-5  h-100" style="height:250% !important">
  <div class="row text-center justify-content-center">
    <h1 class="caption">
      FOLLOW OUR INSTAGRAM
    </h1>
  </div>
  <div class="row text-center justify-content-center red-insta">
    <h2>@wbf_kuta_bali</h2>
  </div>
</div>


</main>

@endsection
@section('script')
    <script>
    $(document).ready(function() {
              var owl = $('.one-carousel');
              owl.owlCarousel({
                margin: 10,
                nav: false,
                loop: true,
                responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 2
                  },
                  1000: {
                    items: 4
                  }
                }
              })
            })

    $(document).ready(function() {
              var owl = $('.two-carousel');
              owl.owlCarousel({
                margin: 10,
                nav: false,
                loop: true,
                responsive: {
                  0: {
                    items: 3
                  },
                  600: {
                    items: 4
                  },
                  1000: {
                    items: 6
                  }
                }
              })
            })        
    </script>
@endsection