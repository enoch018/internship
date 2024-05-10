<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
   @include('admin.css')
<base href="/public">
   <style type="text/css">

   /* Style for the form container */
.form-container {
  max-width: 500px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: #f9f9f9;
}

/* Style for form labels */
.form-container label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

/* Style for form inputs */
.form-container input[type="text"],
.form-container input[type="number"],
.form-container select {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
  box-sizing: border-box;
}

/* Style for submit button */
.form-container input[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #4caf50;
  color: white;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

/* Style for success message */
.alert-success {
  margin-bottom: 20px;
}

/* Centering content */
.div_center {
  text-align: center;
  padding-top: 20px;
}

     .div_center{
      text-align: center;
      padding-top: 20px;
    
     }
      label{
      display: inline-block;
      width: 100px;
     } 
     .text_color{
     color: black;

     }
     .option_color{
      color: black
     }
     .image_edit{
      margin:auto;
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
            @if(session()->has('message')) 
            <div class="alert alert-success" id= "success-alert">
              <button type ="button" class = "close" data-dismiss= "alert" aria-hidden="true">X</button>
              {{ session()->get('message') }}
            </div>
            @endif
            <div class="div_center">

              <h1 class="font_size">Add Product</h1>

             <br>



             {{-- form --}}
             <form action="{{url('/update_product_confirm',$product ->id)}}" method="POST"
             enctype="multipart/form-data">

             @csrf

<div class="div_design">
  <label>Product Title:</label>
  
  <input class="text_color" type="text" name="title" placeholder="Write a title" required="" value="{{$product->title}}">
</div>

<div class="div_design">
  <label>Product Description:</label>

  <input class="text_color" type="text" name="description" placeholder="Write a Description " required="" value="{{$product->description}}">
</div>

<div class="div_design">
  <label>Product Price:</label>

  <input class="text_color" type="number" name="price" placeholder="Write a price" required="" value="{{$product->price}}">
</div>

<div class="div_design">
  <label>Product Quantity:</label>

  <input class="text_color" type="number" name="quantity" placeholder="Write a Quantity" required="" value="{{$product->quantity}}">
</div>

<div class="div_design">
  <label>Discount Price:</label>

  <input class="text_color" type="number" name="dis_price"  min="0" placeholder="Write a Discount Price if any" value="{{$product->discount_price}}" >
</div>

<div class="div_design">
  <label>Product Catagory:</label>
  <select  required="" name="category" class="text_color" >


 <option value="{{$product->category}}" selected=""  >{{$product->category}}</option>
 @foreach($category as $category)

<option  class ="option_color" name ="category"value="{{$category->Category_name}}">{{$category->Category_name}}</option>
 @endforeach
  </select>

 
</div>

<div class="div_design">
  <label>Current Product Image</label>
  <img  class="image_edit" src="/product/{{$product->image}}" height=300 width=300>
  </div>
  
  

<div class="div_design">
  <label>Change Product Image:</label>

  <input class="text_color" type="file" name="image">
</div>
          
<div class="div_design">
 

  <input type ="submit" value="Update Product" class="btn
btn-primary">
</div>
</form>
            </div>
       
      </div>
    </div>
        {{-- @include('admin.body') --}}
    <!-- container-scroller -->
    <!-- plugins:js -->
      @include('admin.script')
  </body>
</html>