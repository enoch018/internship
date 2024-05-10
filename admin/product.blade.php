<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  @include('admin.css')
  <style type="text/css">
    .div_center {
      text-align: center;
      padding-top: 20px;
    }

    label {
      display: inline-block;
      width: 100px;
    }

    .text_color {
      color: black;
    }

    .option_color {
      color: black;
    }
  </style>
  <script type="text/javascript">
    function showSuccessMessage() {
      alert('Product added successfully!');
    }
  </script>
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
        <div class="div_center">
          <h1 class="font_size">Add Product</h1>
          <br>
          <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data" onsubmit="showSuccessMessage()">
            @csrf
            <div class="div_design">
              <label>Product Title:</label>
              <input class="text_color" type="text" name="title" placeholder="Write a title" required="">
            </div>
            <div class="div_design">
              <label>Product Description:</label>
              <input class="text_color" type="text" name="description" placeholder="Write a Description " required="">
            </div>
            <div class="div_design">
              <label>Product Price:</label>
              <input class="text_color" type="number" name="price" placeholder="Write a price" required="">
            </div>
            <div class="div_design">
              <label>Product Quantity:</label>
              <input class="text_color" type="number" name="quantity" placeholder="Write a Quantity" required="">
            </div>
            <div class="div_design">
              <label>Discount Price:</label>
              <input class="text_color" type="number" name="dis_price" min="0"
                     placeholder="Write a Discount Price if any">
            </div>
            <div class="div_design">
              <label>Product Category:</label>
              <select required="" name="category" class="text_color">
                <option value="" selected="" required="">Select Option</option>
                @foreach($category as $cat)
                  <option class="option_color" value="{{$cat->Category_name}}">{{$cat->Category_name}}</option>
                @endforeach
              </select>
            </div>
            <div class="div_design">
              <label>Product Image:</label>
              <input class="text_color" type="file" name="image" required="">
            </div>
            <div class="div_design">
              <input type="submit" value="Add Product" class="btn btn-primary">
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
</body>
</html>
