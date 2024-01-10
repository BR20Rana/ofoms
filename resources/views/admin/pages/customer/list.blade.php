@extends('admin.master')
@section('content')

<div class="container">
<h1> Customer List:</h1>
</div>  

<div style = "width:1000px" class="container pt-4">

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($customerdata as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>
       <a class="btn btn-primary" href="#">View</a>
       <a class="btn btn-success" href="#">Edit</a>
       <a class="btn btn-danger" href="#">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection