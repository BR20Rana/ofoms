@extends('admin.master')

@section('content')

<div class="container">
  <h3>Customer Form</h3>
<form  action="{{route('customer_store')}}" method="post">
  @csrf
  <div class="form-group" >
    <label >Customer Name</label>
    <input type="text" name="customername" class="form-control" placeholder="customer Name">
    <small class="form-text text-muted"></small>
  </div><br>
  <div class="form-group">
    <label for=""> Email </label>
    <input type="email" name="customeremail" class="form-control" placeholder="customer email">
  </div><br>
  <div class="form-group">
    <label for="">Customer Address </label>
    <input type="text" name="customeraddress" class="form-control" placeholder="Customer Address">
  </div><br>
  <div class="form-group">
    <label for=""> Customer Phone Number </label>
    <input type="number" name="customerpnumber" class="form-control" placeholder="Customer phone number">
  </div><br>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection