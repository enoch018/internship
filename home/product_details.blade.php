<!DOCTYPE html>
<html lang="zxx">

<head>

  <base href="/public">
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>details</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="home/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="home/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="home/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/style.css" type="text/css">
</head>

<body style="margin-top: -10px">
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

   
    <!-- Humberger End -->
@include('sweetalert::alert')
    <!-- Header Section Begin -->
    @include('home.header')
    <!-- Header Section End -->

   
    <div class="row featured__filter">
      <div class="col-lg-3 col-md-4 col-sm-6" style="margin: auto; width:50%">
          <div   >
              <div style="height: 300px ; width: 400px; " class="featured__item__pic set-bg" data-setbg="product/{{$product->image}}">
              </div>
          </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6" style="margin: auto; width:50%">
          <div class="featured__item">
              <div class="detail-box">
                  <h3><strong>{{$product->title}}</strong></h3>
                  @if($product->discount_price=null)
                  <h5 style="color:red">Rs.{{$product->discount_price}}</h5>
                  <h5 style="text-decoration:line-through;">Rs.{{$product->price}}</h5>
                  @endif
                  <h5>Rs.{{$product->price}}</h5>
                  <h5>Product Category: {{$product->category}}</h5>
                  <h5>Product Details: {{$product->description}}</h5>
                  <h5>Available Quantity: {{$product->quantity}}</h5>

                  <form action="{{url('add_cart',$product->id)}}" method="POST">  
                    @csrf
                      <h5>Quantity:</h5>    <input style="margin-bottom:3px " type="number" value="1" min="1" name="quantity"/>
                  
                      <input type="submit" value="Add To Cart" class="btn btn-primary"> 
                      {{-- <input type="submit" value="Buy Now" class="btn btn-success"> --}}
                  </form> 
              </div>
          </div>
      </div>
  </div>
  


    <!-- Categories Section Begin -->
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->

    <!-- Featured Section End -->

    <!-- Banner Begin -->

    <!-- Banner End -->

    <!-- Latest Product Section Begin -->
    {{-- @include('home.product') --}}
    <!-- Latest Product Section End -->


    <!-- Footer Section Begin -->
   @include('home.footer')
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="home/js/jquery-3.3.1.min.js"></script>
    <script src="home/js/bootstrap.min.js"></script>
    <script src="home/js/jquery.nice-select.min.js"></script>
    <script src="home/js/jquery-ui.min.js"></script>
    <script src="home/js/jquery.slicknav.js"></script>
    <script src="home/js/mixitup.min.js"></script>
    <script src="home/js/owl.carousel.min.js"></script>
    <script src="home/js/main.js"></script>



</body>
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        var scrollpos = localStorage.getItem('scrollpos');
        if (scrollpos) {
            window.scrollTo(0, scrollpos);
        }
    });
    
    window.onbeforeunload = function(e) {
        localStorage.setItem('scrollpos', window.scrollY);
    };
    </script>
</html>