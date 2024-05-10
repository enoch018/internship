<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Order</title>

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


    <style>
.footer {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}



    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

 
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    @include('home.header')
    <!-- Header Section End -->
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Product Title</th>
          <th scope="col">Price</th>
          <th scope="col">Payment Status</th>
          <th scope="col">Delivery Status</th>
          <th scope="col">Image</th>
          <th scope="col">Cancel Order</th>
          
        </tr>


      </thead>
      <tbody>
       @foreach($orders as $order)
<tr>
    <td>{{$order->product_title}}</td>
    <td>{{$order->price}}</td>
    <td>{{$order->payment_status}}</td>
    <td>{{$order->delivery_status}}</td>
    @if($order->delivery_status == 'processing')
   <td > <img style="height: 100px; width:100px;" src="product/{{ $order->image }}" alt="Product Image"></td>
   <td><a  onclick="return confirm('Are you sure you want to cancel this order?')" href="{{url( 'cancel_order',$order->id)}} " class="btn btn-danger">Cancel Order</a></td>

   @else

     @endif
</tr>
@endforeach
      </tbody>
    </table>

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

</html>