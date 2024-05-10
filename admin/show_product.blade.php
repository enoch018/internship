<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Required meta tags -->
  @include('admin.css')

  <style  type="text/css">
    table {
      width: 100%;
      border-collapse: collapse;
      border-spacing: 0;
    }

    /* Style for table header */
    th {
      background-color: #f2f2f2;
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    /* Style for table rows */
    td {
      border: 1px solid #ddd;
      padding: 8px;
    }

    /* Alternate row color */
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>
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

          <table>
            <tr> 
              <th>Product title</th>
              <th>Description</th>
              <th>Quantity</th>
              <th>Category</th>
              <th>Price</th>
              <th>Discount Price</th>
              <th>Product Image</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
            @foreach($product as $product)
            <tr>
              <td>{{$product->title}}</td>
              <td>{!!Str::limit($product->description,100)!!}</td>
              <td>{{$product->quantity}}</td>
              <td>{{$product->category}}</td>
              <td>Rs {{$product->price}}</td>
              <td>{{$product->discount_price}}</td>
              <td><img src="/product/{{$product->image}}" alt="" width="200px"></td>
              <td>
                <a class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a>
              </td>
              <td>
                <button class="btn btn-danger delete-product" data-product-id="{{$product->id}}">Delete</button>
              </td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
      {{-- @include('admin.body') --}}
      <!-- container-scroller -->
      <!-- plugins:js -->
      @include('admin.script')

      <script>
        // Confirm before deleting a product
        document.addEventListener('DOMContentLoaded', function () {
          const deleteButtons = document.querySelectorAll('.delete-product');

          deleteButtons.forEach(button => {
            button.addEventListener('click', function (e) {
              const productId = e.target.dataset.productId;
              const confirmation = confirm('Are you sure you want to delete this product?');
              
              if (confirmation) {
                window.location.href = `/delete_product/${productId}`;
              }
            });
          });
        });
      </script>
</body>
</html>
