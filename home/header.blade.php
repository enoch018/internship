
<style>

  .header{
    width: 100%;
    height: auto;
    display: flex;
  }

  /* Common styles */
  .header {
    width: 100%;
    height: auto;
    display: flex;
    flex-direction: column; /* Stack items vertically on small screens */
  }

  .header__top,
  .header__menu {
    width: 100%;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .container-fluid {
    width: 100%;
    max-width: 1200px; /* Adjust max-width as needed */
    margin: 0 ;
    padding: 0 15px; /* Add some padding for better spacing */
  }

  .col-lg-3,
  .col-lg-6 {
    flex: 1; /* Take up equal space */
  }

  .header__logo {
    font-weight: bold;
    font-size: 24px;
    color: greenyellow;
  }

  .header__menu ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
  }

  .header__menu ul li {
    margin-right: 20px;
  }

  .header__menu ul li:last-child {
    margin-right: 0;
  }

  .header__menu ul li a {
    color: inherit;
    text-decoration: none;
  }

  /* Hamburger menu styles */
  .humberger__menu__overlay,
  .humberger__menu__wrapper {
    display: none; /* Hide by default */
  }

  /* Media query for small screens */
  @media only screen and (max-width: 768px) {
    .header {
      flex-direction: column;
    }

    .header__menu {
      flex-direction: column;
      align-items: flex-start;
    }

    .header__menu ul {
      flex-direction: column;
    }

    .header__menu ul li {
      margin-right: 0;
      margin-bottom: 5px;
    }

    .header__menu ul li:last-child {
      margin-bottom: 0;
    }

    .humberger__menu__overlay,
    .humberger__menu__wrapper {
      display: block; /* Show for small screens */
    }
  }
</style>

<header class="header">
    <div class="header__top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6">
             
              {{-- <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3">
          <div class="header__logo">
            <a class="sidebar-brand brand-logo" href="index.html"  style="font-weight:bold; font-size:40px; color:greenyellow">Green Mart  </a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="header__menu">
         
            <ul>
              <li class="active"><a href="{{url('/')}}">Home</a></li>
              <li><a href="{{url('/shop')}}">Shop</a></li>
              
              <li><a href="./contact.html">Contact</a></li>
              <li><a href="{{url('/showcart')}}">Cart</a></li>
              <li><a href="{{url('/show_order')}}">Order</a></li>
        
              
              @if (Route::has( 'login' ) )
              @auth
                  
            <li class="nav-item">
              <x-app-layout>    
                </x-app-layout>
            </li>
              @else

              <li><a class="btn btn-primary"  href="{{ route('login') }}">Login</a></li>
              <li><a class="btn btn-success" href="{{ route('register') }}">Register</a></li>

              @endauth
              @endif
             
              <li> <a href="{{url('showcart')}}"><i class="fa fa-shopping-bag"></i>  </a></li>
            
            </ul>
          </nav>
        </div>
      </div>
      <div class="humberger__open">
        <i class="fa fa-bars"></i>
      </div>
    </div>
  </header>
  <br>

   <!-- Humberger Begin -->
   <div class="humberger__menu__overlay"></div>
   <div class="humberger__menu__wrapper">
       <div class="humberger__menu__logo">
           <a href="#"><img src="img/logo.png" alt=""></a>
       </div>
       <div class="humberger__menu__cart">
           {{-- <ul>
               <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
               <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
           </ul> --}}
           <div class="header__cart__price"></span></div>
       </div>
       <div class="humberger__menu__widget">
           <div class="header__top__right__language">
               <img src="img/language.png" alt="">
               <div>English</div>
               <span class="arrow_carrot-down"></span>
               <ul>
                   <li><a href="#">Spanis</a></li>
                   <li><a href="#">English</a></li>
               </ul>
           </div>
           <div class="header__top__right__auth">
               <a href="#"><i class="fa fa-user"></i> Login</a>
           </div>
       </div>
       <nav class="humberger__menu__nav mobile-menu">
           <ul>
               <li class="active"><a href="./index.html">Home</a></li>
               <li><a href="./shop-grid.html">Shop</a></li>
               <li><a href="#">Pages</a>
                   <ul class="header__menu__dropdown">
                       <li><a href="./shop-details.html">Shop Details</a></li>
                       <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                       <li><a href="./checkout.html">Check Out</a></li>
                       <li><a href="">Cart</a></li>
                   </ul>
               </li>
               <li><a href="{{url('/showcart')}}">Cart</a></li>
               <li><a href="./contact.html">Contact</a></li>
           </ul>
       </nav>
       <div id="mobile-menu-wrap"></div>
       <div class="header__top__right__social">
           <a href="#"><i class="fa fa-facebook"></i></a>
           <a href="#"><i class="fa fa-twitter"></i></a>
           <a href="#"><i class="fa fa-linkedin"></i></a>
           <a href="#"><i class="fa fa-pinterest-p"></i></a>
       </div>
       <div class="humberger__menu__contact">
           <ul>
               <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
               <li></li>
           </ul>
       </div>
       </div>
       </div>
       </div>
     </div>
   </div>
  </div>

</header>