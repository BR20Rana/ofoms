 
 @include('frontend.master')
 @section('content')
 <!-- CAtegories Section Starts Here -->
 <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <a href="category-foods.html">
            <div class="box-3 float-container">
                <img src="{{'/frontend/'}}/images/pizza.jpg" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white">Pizza</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="{{'/frontend/'}}/images/burger.jpg" alt="Burger" class="img-responsive img-curve">

                <h3 class="float-text text-white">Burger</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="{{'/frontend/'}}/images/momo.jpg" alt="Momo" class="img-responsive img-curve">

                <h3 class="float-text text-white">Momo</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="{{'/frontend/'}}/images/kacchi.png" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white">kacchi</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="{{'/frontend/'}}/images/chicken.jpeg" alt="Burger" class="img-responsive img-curve">

                <h3 class="float-text text-white">Chicken_Fry</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="{{'/frontend/'}}/images/grill.jpg" alt="Momo" class="img-responsive img-curve">

                <h3 class="float-text text-white">Chicken_Grill</h3>
            </div>
            </a>
            <a href="#">
            <div class="box-3 float-container">
                <img src="{{'/frontend/'}}/images/noddles.jpg" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white">Nodolles</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="{{'/frontend/'}}/images/fuska.jpeg" alt="Burger" class="img-responsive img-curve">

                <h3 class="float-text text-white">Fuska</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="{{'/frontend/'}}/images/chotpoti.jpeg" alt="Momo" class="img-responsive img-curve">

                <h3 class="float-text text-white">Chatpoti</h3>
            </div>
            </a>

            @include('frontend.partials.footer')
        </div>
    </section>
    
    <!-- Categories Section Ends Here -->