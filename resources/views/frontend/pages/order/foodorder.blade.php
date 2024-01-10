@include('frontend.master')
@section('content')

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="{{route('order.store')}}" class="order" method="post">
                @csrf
                <fieldset>
                    <legend>Selected Food</legend>
                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        <div class="order-label">Price:{{$menus->food_price}} </div>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="full_name" placeholder="E.g. Burhan Uddin Rana" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="number" name="contact" placeholder="E.g. 9843xxxxxx" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. burhaniubat2020@gmail.com" class="input-responsive" required>
                    
                    <input type="hidden" name="total_price" value="{{$menus->food_price}}">

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

        </div>
    </section>
   

</body>
</html>