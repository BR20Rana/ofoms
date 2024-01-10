@extends('admin.master')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <style>
    .dashboard {
      background-image: url("backend/img/food.jpg");
      background-size: cover;
      background-repeat: no-repeat;
      height: 500px; /* Adjust the height as needed */
      position: relative;
    }

    .content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: white;
    }

    .button {
      background-color: #04AA6D;
      border: none;
      color: white;
      padding: 15px 32px;
      text-decoration: none;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    }
  </style>
</head>
<body>

<div class="dashboard">
  <div class="content">
    <h2>Dashboard</h2>
    <a href="{{route('Customer_List')}}" class="button">Customer</a>
    <a href="{{url('/menu')}}" class="button">Menu</a>
    <a href="{{('/delivery/list')}}" class="button">Delivery</a>
    <a href="{{route('home')}}" class="button">Payment</a>
  </div>
</div>

</body>
</html>




@endsection