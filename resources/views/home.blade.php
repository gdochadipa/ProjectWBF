@extends('component.app')
@section('title')
    Home
@endsection
@section('component')
<link rel="stylesheet" href="{{asset('style/css/home_style.css')}}">
<main role="main">

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
<div class="container py-5 my-5 h-100">
  <div class="row text-center justify-content-center">
    <h1 class="caption">
      NEW ARRIVALS
    </h1>
  </div>
  <div class="row text-center justify-content-center">
    <img src="{{asset('asset/red-line.png')}}" alt="">
  </div>
</div>

<div class="container py-h">
  <div class="row">
    <div class="owl-carousel owl-theme">
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

<div style="margin: 15px 0; background-image: url('{{asset('asset/banner1.png')}}');" class="img-fluid w-100 p-3 h-auto d-inline-block" >

  <div class="row my-5 mx-1">
      <div class="col">
        <h5 style="color: white">
          STOREWIDE SALE UP TO
        </h5>
        <h1 style="color: white; font-size: 70px">
          90% OFF
        </h1>
      </div>
      <div class="col">
       <div class="float-right align-middle">
          <button type="button" class="btn danger btn-lg">GO TO SALE <i class="fa fa-arrow-right" style="color:white" aria-hidden="true"></i></button>
       </div>
      </div>
    </div>
</div>

<div class="container py-5  h-100">
  <div class="row text-center justify-content-center">
    <h1 class="caption">
      FOR YOU
    </h1>
  </div>
  <div class="row text-center justify-content-center">
    <img src="{{asset('asset/red-line.png')}}" alt="">
  </div>
</div>

  <div class="album py-5 bg-light">
    <div class="container">

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
      </div>
    </div>
  </div>

<div class="container py-5 h-100">
  <div class="row text-center justify-content-center">
     <button type="button" class="btn danger btn-lg btn-see" style=""><span style="font-size: 15px"> SEE ALL PRODUCT  </span> </button>
  </div>
  <div class="row text-center justify-content-center">
    
  </div>
</div>

<div style="margin: 20px 0; background-image: url('{{asset('asset/banner2.png')}}');" class="img-fluid w-100 p-3 h-100 d-inline-block" >
<div class="container py-5 h-100">
  <div class="row text-center justify-content-center">
    <h1 style="color: antiquewhite" class="caption">
      BRANDS
    </h1>
  </div>
  <div class="row text-center justify-content-center">
    <img src="{{asset('asset/red-line.png')}}" alt="">
  </div>
</div>
</div>



</main>

@endsection
@section('script')
    <script>
    $(document).ready(function() {
              var owl = $('.owl-carousel');
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
    </script>
@endsection