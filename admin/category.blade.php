<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  @include('admin.css')
  <style type="text/css">
    .div_center {
      text-align: center;
      padding-top: 40px;
    }

    .h2_font {
      font-size: 40px;
      padding-bottom: 40px;
    }

    .input_color {
      color: black;
    }

    .button_submit {
      color: white;
      padding: 10px;
      background-color: wheat;
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
          <div class="alert alert-success" id="success-alert">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            {{ session()->get('message') }}
          </div>
        @endif
        <div class="div_center">
          <h1 class="h2_font">Add Category</h1>
          <form action="{{url('/add_category')}}" method="POST" class="form-inline justify-content-center">
            @csrf
            <input class="form-control mr-sm-2 input_color" type="text" name="category"
                   placeholder="Write category name">
            <button class="btn btn-primary button_submit" type="submit" name="submit">Add Category</button>
          </form>

          <table class="table table-striped mt-4">
            <thead>
            <tr>
              <th>Category Name</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $category)
              <tr>
                <td>{{$category->Category_name}}</td>
                <td>
                  <a onclick="return confirm('Are you sure to delete this ?')"
                     href="{{url('delete_category',$category->id)}}" class="btn btn-warning">Delete</a>
                </td>
              </tr>
            @endforeach
            </tbody>
          </table>
          @if(session()->has('category_added'))
            <div class="alert alert-success mt-3">
              {{ session()->get('category_added') }}
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  @include('admin.script')
</body>
</html>
