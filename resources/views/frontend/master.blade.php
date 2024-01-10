<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FOODIE HOME </title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="{{'/frontend'}}/css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="{{'/frontend/'}}/images/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="{{route('front.home')}}"> Home </a>
                    </li>
                    <li>
                        <a href="{{route('explore.food')}}"> Category </a>
                    </li>
                    
                    <li>
                        <a href="{{ route('food.menu') }}"> Food Menu </a>
                    </li>
                    
                    <li>
                    <a href="{{ route('index')}}"> View Food Package </a>
                       
                    </li>
                    
                   <!-- <li>
                       <a class="btn btn-success" href="{{route('customer.registration')}}"> Registration </a>
                    </li>
                    -->
                    @auth
                    <form action="{{ route('customer.logout') }}" method="POST">
                     @csrf
                     <button type="submit">Logout</button>
                        </form>
                     @endauth
                </ul>
                @yield('content')
            </div>
            
            <div class="clearfix"> </div>
        </div>
    </section>
    

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
         <form action="#">
             <!-- <input type="search" name="search" placeholder="Search for Food.." required>-->
               <!-- <input type="submit" name="submit" value="Search" class="btn btn-primary">-->
            </form>
           
        </div>
       
    </section> 
    
   <!-- @include('frontend.partials.footer')-->
   

</body>
</html>