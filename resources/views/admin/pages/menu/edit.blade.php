@extends('admin.master')
@section('content')

<h1>Edit your product</h1>

<form action="{{route('menu.update',$menu->id)}}" method="post" enctype="multipart/form-data">

@csrf
   @method('put')
  <div class="form-group">
    <label for="">Enter Food Name:</label>
    <input value="{{$menu->food_name}}" required type="text" class="form-control" id="" placeholder="Enter name" name="food_name">
    @error('food_name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

  </div>
  <div class="form-group">
    <label for="">Enter Food Type :</label>
    <input value="{{$menu->food_type}}" required type="text" class="form-control" id="" placeholder="Enter name" name="food_type">
    @error('food_type')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

  </div>
  <div class="form-group">
    <label for="">Enter Food price:</label>
    <input value="{{$menu->food_price}}" required type="text" class="form-control" id="" placeholder="Enter name" name="food_price">
    @error('food_price')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

  </div>

  <div class="form-group">
    <label for="">Enter Food Image:</label>
    <input value="{{$menu->image}}" required type="file" class="form-control" id="" placeholder="Enter name" name="image">
    
    @error('food_image')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
 
</form>
@endsection