<!DOCTYPE html>
<html lang="en">

  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sixteen Clothing HTML Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html"><h2>Sixteen <em>Clothing</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="products.html">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>

              <li class="nav-item">
              @if (Route::has('login'))
              
                  @auth

                  <li class="nav-item">
                    <a class="nav-link" href="{{url('showcart')}}">
                      <i class="fas fa-shopping-cart"></i>
                      Cart[{{$count}}]</a>
                  </li>
                  
                      
                        <li class="nav-item dropdown">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              {{ Auth::user()->name }}
                          </a>

                          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                 onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>

                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d_none">
                                  @csrf
                              </form>
                          </div>
                      </li>
                    
                  @else
                      <li><a href="{{ route('login') }}" class="nav-link">Log in</a></li>

                      @if (Route::has('register'))
                          <li><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                      @endif
                  @endauth
            
          @endif
            </li>

            </ul>
          </div>
        </div>
      </nav>
    </header>
    

    <div style="padding:100px;" align="center">
    <table>
        <tr style="background-color: black;">
            <td style="padding:10px; font-size: 20px; color:white;">Product Name</td>
            <td style="padding:10px; font-size: 20px; color:white;">Product Quantity</td>
            <td style="padding:10px; font-size: 20px; color:white;">Price</td>
            <td style="padding:10px; font-size: 20px; color:white;">Action</td>
        </tr>
    @if(session()->has('message'))
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">x</button>
     {{session()->get('message')}}
    </div>
      @endif

      
      


      <form action="{{url('order')}}" method="post">
        @csrf
        @foreach($cart as $carts)
        <tr style="background-color: black;">
            <td style="padding:10px; color:white;">
            <input type="text" name="productname[]" value="{{$carts->product_title}}" hidden>
            {{$carts->product_title}}
            </td>
            <td style="padding:10px; color:white;">
            <input type="text" name="quantity[]" value="{{$carts->quantity}}" hidden>
            {{$carts->quantity}}
            </td>
            <td style="padding:10px; color:white;">
            <input type="number" name="price[]" value="{{$carts->price}}" hidden>
            {{$carts->price}}
            </td>
            
            <td style="padding:10px; color:white;">
            <a class="btn btn-danger" href="{{url('delete',$carts->id)}}">Delete</a>
            </td>

        </tr>
        @endforeach
    </table>
    <button class="btn btn-success">Cash On Delivery</button>
</form>
    </div>

    


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
