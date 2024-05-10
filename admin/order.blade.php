<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Required meta tags -->
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
       @include('admin.header')
        <!-- partial -->
        <div class="main-panel">

          <div class="content-wrapper">
            <h2 style="text-align:center; font-size:30px;">Order Details</h2>
          
            <form action="{{url('search')}}" method="GET" style=" margin: self;">
              @csrf
              <input type="text" name="Something" placeholder="Enter something">
              <input type="submit" value="Search" class="btn btn-outline-primary">
          </form>
            <table class="table table-bordered" style="margin: auto ; width:80% align-left:0; font-size:10px;">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Product Title</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Payment Status</th>
                  <th>Delivery Status</th>
                  <th>Image</th>

                  <th>Delivered</th>
                  <th>Print Pdf</th>

                  <th>Send Email</th>

                </tr>
              </thead>
              <tbody>
           @forelse ($order as $order )
             
      
                <tr>
                  <td>{{ $order->name }}</td>
                  <td>{{ $order->email }}</td>
                  <td>{{ $order->address }}</td>
                  <td>{{ $order->phone }}</td>
                  <td>{{ $order->product_title }}</td>
                  <td>{{ $order->quantity }}</td>
                  <td>{{ $order->price }}</td>
                  <td>{{ $order->payment_status }}</td>
                  <td>{{ $order->delivery_status }}</td>
                  <td><img src="/product/{{$order->image}}"  style="width: 200px; height:100px"></td>

                  <td>
                    @if ($order->delivery_status=='processing')
                        
                  
                    <a href="{{url('delivered',$order->id)}}" onclick="return confirm('Are you sure this product is delivered ?')" class="btn btn-secondary">Delivered</a>

                    @else
                    <A>Delivered</A>

                    @endif
                  </td>

                  <td>
                    <a href="{{url('print_pdf',$order->id)}}" class="btn btn-primary">Print PDF</a>
                  </td>

                  <td><a href="{{url('send_email',$order->id)}}" class="btn btn-info">Send email</a></td>
                </tr>

                @empty
                <div>
                
                  <td colspan="16">No data found!</td>
{{-- <p>NO Data Found</p> --}}


</div>
                @endforelse
              </tbody>
            </table>
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
  </body>
</html>