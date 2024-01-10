@extends('admin.master')
 @section('content')


 <!DOCTYPE html>
<html>
<head>
    <title>Shop Selection</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-image: url('c-bg.jpg'); 
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        h1 {
            color: #333;
        }
        form {
            background-color: rgba(255, 255, 255, 0.7); 
            border-radius: 10px;
            padding: 20px;
        }
        label {
            font-weight: bold;
        }
        select {
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Select a Shop</h1>
    <form action="{{route('shop.store')}}" method="post">
        @csrf
        <label for="shopSelect">Choose a shop:</label>
        <select id="shopSelect" name="shop">
            <option value="shop1">Uttara Food Zone</option>
            <option value="shop2">Grant capcha</option>
            <option value="shop3">Street Best Food</option>
            <option value="shop4">Mama Momos Special</option>
            <option value="shop5">Burger and Sanduchis special</option>
        </select>
        <br>
        <br>
        <input type="submit" value="Submit">
    </form>

    <script>
        const shopSelect = document.getElementById('shopSelect');
        shopSelect.addEventListener('change', function () {
            const selectedShop = shopSelect.value;
            const message = `You selected: ${selectedShop}`;
            alert(message);
        });
    </script>
</body>
</html>


 @endsection