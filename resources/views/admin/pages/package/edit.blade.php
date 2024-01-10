@extends('admin.master')
@section('content')

<h1>Edit your package</h1>

<form action="{{route('package.update',$package->id)}}" method="post" enctype="multipart/form-data">

@csrf
   @method('put')
  <div class="form-group">
    <label for=""> Enter Food Name: </label>
    <input value="{{package->food_name}}" required type="text" class="form-control" id="" placeholder="Enter name" name="food_name">
    @error('food_name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

  </div>
  <div class="form-group">
    <label for="">  Enter Food Type: </label>
    <input value="{{$package->food_type}}" required type="text" class="form-control" id="" placeholder="Enter name" name="food_type">
    @error('food_type')
    <div class="alert alert-danger"> {{ $message }} </div>
    @enderror

  </div>
  <div class="form-group">
    <label for="">Enter Food price:</label>
    <input value="{{packageu->food_price}}" required type="text" class="form-control" id="" placeholder="Enter name" name="food_price">
    @error('food_price')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

  </div>

  <div class="form-group">
    <label for="">Enter Food Image: </label>
    <input value="{{$package->image}}" required type="file" class="form-control" id="" placeholder="Enter name" name="image">
    
    @error('food_image')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

  </div>
  <button type="submit" class="btn btn-primary"> Submit </button>
 
</form>
@endsection