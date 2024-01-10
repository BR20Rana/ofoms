@extends('admin.master')
@section('content')

<div class="container">
<form  method="POST" action="{{ route('store.package') }}" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">  Food Name </label>
    <input type="name" name="food_name" class="form-control" placeholder="Food Name">
    <small class="form-text text-muted"></small>
  </div> <br>
  <div class="form-group">
    <label for="">Food Type </label>
    <input type="" name="food_type" class="form-control" placeholder="Food Type">
  </div> <br>
  <div class="form-group">
    <label for=""> Food Image </label>
    <input type="file" name="image" class="form-control" placeholder="Food Quantity">
  </div> <br>
  <div class="form-group">
    <label for=""> Food price </label>
    <input type="" name="food_price" class="form-control" placeholder="Food Price">
  </div> <br>
  
  <button type="submit" class="btn btn-primary"> Submit </button>
</form>
</div>

@endsection