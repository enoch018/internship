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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Css Styles -->
    <link rel="stylesheet" href="home/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="home/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="home/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/style.css" type="text/css">

    <style>
      .total_deg{

        font-size: 20px;
        padding: 40px;
       
        
      }

    
        .total_deg {
            font-size: 20px;
            padding: 40px;
        }

        /* Responsive styles */
        @media (max-width: 768px) {
            .total_deg {
                padding: 20px;
            }

            .container {
                padding-left: 15px;
                padding-right: 15px;
            }
        }
    
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>

     
    </div>
<div class="hero_area">
  @include('home.header')
</div>
   
    <!-- Humberger End -->

    <!-- Header Section Begin -->
   @if( session()->has('message')) 
    <div class="alert  alert-success" >
   <button type="button" class="close"  data-dismiss="alert" aria-hidden="true">&times;</button>
     {{session()->get('message')}}
    </div>
    @endif
    <!-- Header Section End -->

    <div class="container">
      <h2>Product Table</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Product Title</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $totalprice=0; ?>

          @foreach ($cart as $cart)
          <tr>
              <td>{{$cart->product_title}}</td>
           
              <td>{{$cart->quantity}}</td>
              <td>Rs. {{$cart->price}}</td>
              <td><img src="/product/{{$cart->image}}" alt="" width="80"></td>
              <td><a  class="btn btn-danger" onclick="return confirm('Are you sure to remove this product')" href ="{{url('remove_cart',$cart->id)}}">Remove</a></td>
          </tr>

          <?php $totalprice= $totalprice + ($cart->price )?>
      @endforeach
        
          <!-- Add more rows as needed -->
        </tbody>
      </table>

      <div >
       <h1 class="total_deg"> Total Price: Rs.{{$totalprice}}</h1>
      </div>

  <div>
    <h1>Payment Methods : </h1>
    <br>
    <a style="margin: auto" href="{{url('cash_order')}}" class="btn btn-primary">Cash on delivery </a>
    <a style="margin: auto" href="{{url('stripe',$totalprice)}}" class="btn btn-primary">Pay Using Card</a>
  </div>
    </div>

<br>
<be>
  <hr>
    <!-- Footer Section Begin -->
   {{-- @include('home.footer') --}}
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>