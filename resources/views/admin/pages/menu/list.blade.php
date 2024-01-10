@extends('admin.master')
@section('content')

<div class="container">
<form  method="POST" action="{{ route('store.menu') }}" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">  Food Name</label>
    <input type="name" name="food_name" class="form-control" placeholder="FoodName">
    <small class="form-text text-muted"></small>
  </div> <br>
  <div class="form-group">
    <label for="">Food Type</label>
    <input type="text" name="food_type" class="form-control" placeholder="FoodType">
  </div> <br>
  <div class="form-group">
    <label for=""> Food Image </label>
    <input type="file" name="image" class="form-control" placeholder="FoodQuantity">
  </div> <br>
  <div class="form-group">
    <label for="">Food price</label>
    <input type="integer" name="food_price" class="form-control" placeholder="FoodPrice">
  </div><br>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection