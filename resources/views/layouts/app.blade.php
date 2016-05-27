<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
     <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
     <link rel="stylesheet" href="{{ URL::asset('css/navbar.css') }}">
        

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
   @yield('styles')
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">

    
</div>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
               
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                </ul>
                  <ul class="nav navbar-nav">
                    <li><a href="{{ url('/sample-page') }}">Menjadi Anggota</a></li>
                </ul>
                  <ul class="nav navbar-nav">
                    <li><a href="{{ url('/sample-page') }}">Chartered Account</a></li>
                </ul>
                  <ul class="nav navbar-nav">
                    <li><a href="{{ url('/sample-page') }}">Sertfikasi</a></li>
                </ul>
                  <ul class="nav navbar-nav">
                    <li><a href="{{ url('/sample-page') }}">Registrasi Ulang</a></li>
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/pendaftaran') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                           
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                          
                        </li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="masthead">
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
     <li data-target="#myCarousel" data-slide-to="1"  class="active"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://kalotrainfotech.com/img/HD-Web-Informational-Ecommerce.jpg" class="img" alt="img1">
    </div>

    <div class="item">
      <img src="http://www.devscare.com/wp-content/uploads/2015/12/atai.jpg" class="img" alt="img2">
    </div>

    <div class="item">
      <img src="http://freedesignfile.com/upload/2012/11/business_people_02.jpg" class="img" alt="Flower">
    </div>

  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
    </nav>
     
    @yield('content')
  <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
 <script type="text/javascript">
 $(document).ready(function(){


});</script>
      @yield('scripts')


    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

      <div class="panel-footer">
  <div class="container">
         <div class="text-left col-md-9">
  
     <strong>Copyright © 2016 <a href="#">{{config('public.title')}}</a>.</strong> All rights reserved.
    </div>

  <div class="text-right col-md-3 ">
  
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel odio velit. Morbi est nulla, aliquam nec tristique ac, lacinia eget nibh. Ut lacinia ipsum pretium, faucibus quam pulvinar, pellentesque neque.
  
    </div>
    </div>
  </div>
</body>
</html>
