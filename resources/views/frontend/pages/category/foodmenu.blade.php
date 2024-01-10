@include('frontend.master')
@section('content')



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            @foreach($menus as $menu)
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img height="130px" src="{{url('/food/image/'.$menu->image)}}" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>{{$menu->food_name}}</h4>
                    <p class="food-price"> {{$menu->food_price .'.'. 'BDT'}}</p>
                    <p class="food-detail">
                    {{$menu->food_type}}
                    </p>
                    <br>

                    <a href="{{route('order.food', $menu->id)}}" class="btn btn-primary"> Order Now </a>
                </div>
            </div>
            @endforeach
            

            <div class="clearfix"></div>

        </div>

    </section>
   

</body>
</html>