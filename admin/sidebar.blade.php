@include('admin.css')
<nav class="sidebar sidebar-offcanvas" id="sidebar">

  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="index.html"  style="font-weight:bold;">Green Mart  </a>
    <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
  </div>
  <ul class="nav">
    
       
         
            {{-- <img class="img-xs rounded-circle " src="admin/assets/images/faces/face15.jpg" alt=""> --}}

    <li class="nav-item nav-category">
      <span class="nav-link">Navigation</span>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{url('/redirect')}}">
        <span class="menu-icon">
          <i class="mdi mdi-speedometer"></i>
        </span>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{url('/view_product')}}">
        <span class="menu-icon">
          <i class="mdi mdi-plus menu-icon"></i>
        </span>
        <span class="menu-title">Add Product</span>
      </a>
    </li>

    <li class="nav-item menu-items">
      <a class="nav-link" href="{{url('/show_product')}}">
        <span class="menu-icon">
          <i class="mdi mdi-eye menu-icon"></i>
        </span>
        <span class="menu-title">Show Product</span>
      </a>
    </li>
    
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{url('view_category')}}">
        <span class="menu-icon">
          <i class="mdi mdi-playlist-play"></i>
        </span>
        <span class="menu-title">Category</span>
      </a>
    </li>
   
    <li class="nav-item menu-items">
      <a class="nav-link" href="{{url('order')}}">
        <span class="menu-icon">
          <i class="mdi mdi-playlist-play"></i>
        </span>
        <span class="menu-title">Order</span>
      </a>
    </li>
   
  </ul>
</nav>