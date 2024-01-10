@extends('admin.master')
@section('content')
<table class="table">
  <h1> Delivery List </h1>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col"> Email </th>
      <th scope="col">Address </th>
      <th scope="col">Phone_number</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Burhan Uddin Rana</td>
      <td>burh@gmail.com</td>
      <td>jinardi palash Narsingdi</td>
      <td> 0157894656 </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Shabuj Hossain </td>
      <td>shabuj@gmail.com </td>
      <td>Chandra Gazipur Dhaka</td>
      <td>0163548795</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Tanjina AKter</td>
      <td>tanjia145@gmail.com</td>
      <td>uttara -12 Dhaka</td>
      <td>0154789456 </td>
    </tr>
    <tr>
    <th scope="row">4</th>
    <td>Tushar Hossain </td>
    <td>tushar@gmail.com</td>
    <td>10-Uttara, Dhaka </td>
    <td>014789545795</td>
    </tr>
  </tbody>
</table>
@endsection