@extends('frontend.master')
@section('content')

@foreach($packages as $iteam)

 <h1>{{ $iteam->id}}</h1>
 <h1>{{ $iteam->food_name}}</h1>
 <h1>{{ $iteam->food_type}}</h1>
 <h1>{{ $iteam->food_price}}</h1>
 <div class="text-center">
  <img src=" {{url('/food/image/' . $iteam->image)}}" class="rounded" alt="...">
</div>
@endforeach

@endsection