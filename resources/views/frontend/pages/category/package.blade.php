<!--

@include('frontend.master')
@section('content')



   fOOD MEnu Section Starts Here 
    <section class="food-menu">
        <div class="container">
            
            <h2 class="text-center"> Food Packages </h2>
            @foreach($packages as $menu)
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img height="130px" src="{{url('/food/image/'.$packages->image)}}" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>{{$packages->food_name}}</h4>
                    <p class="food-price"> {{$packages->food_price .'.'. 'BDT'}}</p>
                    <p class="food-detail">
                    {{$packages->food_type}}
                    </p>
                    <br>

                    <a href="{{route('order.food', $packages->id)}}" class="btn btn-primary"> Order Now </a>
                </div>
            </div>
            @endforeach
            
            <div class="clearfix"></div>

        </div>

    </section>
   

</body>
</html>
-->
<!-- 
@extends('frontend.master')
@section('content')

    fOOD Menu Section Starts Here 
    <section class="food-menu">
        <div class="container">
            
            <h2 class="text-center"> Food Packages </h2>
            @foreach($packages as $package)
           
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img height="130px" src="{{ url('/food/image/' . optional($package)->image) }}" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>{{ $package->food_name }}</h4>
                    <p class="food-price"> {{ $package->food_price .'.'. 'BDT' }}</p>
                    <p class="food-detail">
                        {{ $package->food_type }}
                    </p>
                    <br>

                    <a href="{{ route('order.food', $package->id) }}" class="btn btn-primary"> Order Now </a>
                </div>
            </div>
            @endforeach
            
            <div class="clearfix"></div>

        </div>
    </section>

@endsection
-->

@extends('frontend.master')
@section('content')

    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            
            <h2 class="text-center"> Food Packages </h2>

            @foreach ($packages as $package)
    <div class="food-menu-box">
        <div class="food-menu-img">
           
                <img height="130px" src="{{ url('/food/image/' . $package->image) }}" alt="{{ $package->food_name }}" class="img-responsive img-curve">
            
        </div>

        </div>


                    <div class="food-menu-desc">
                        <h4>{{ $package->food_name }}</h4>
                        <p class="food-price"> {{ $package->food_price .'.'. 'BDT' }}</p>
                        <p class="food-detail">
                            {{ $package->food_type }}
                        </p>
                        <br>

                        <a href="{{ route('order.food', $package->id) }}" class="btn btn-primary"> Order Now </a>
                    </div>
                </div>
            @endforeach
            
            <div class="clearfix"></div>

        </div>
    </section>

@endsection


