@extends('admin.master')
@section('content')

<h1> Food Menu </h1>


<a href="{{route('addmenu')}}">
  <h2 class="btn btn-success"> Add Menu </h2>
</a>

<div style = "width:1000px" class="container pt-4">

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Food Name</th>
      <th scope="col">Food Type</th>
      <th scope="col">Food Image </th>
      <th scope="col">Food Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($menudata as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->food_name}}</td>
      <td>{{$item->food_type}}</td>
      <td>
            <img style="border-radius: 60px;" width="150px" height="100px" src="{{url('/food/image/'.$item->image)}}" alt="">
        </td>
      <td>{{$item->food_price}}</td>
      <td>
       
       <a class="btn btn-success" href="{{route('menu.edit',$item->id)}}"> Edit </a>
       <a class="btn btn-danger" href="{{route('menu.delete',$item->id)}}"> Delete </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>




@endsection