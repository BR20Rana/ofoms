<!-- resources/views/orders/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Orders</title>
</head>
<body>

<h1>Orders</h1>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Quantity</th>
            <th>Full Name</th>
            <th>Contact</th>
            <th>Email</th>
            <th>Address</th>
            <th>Status</th>
            <th>Payment Status</th>
            <th>Transaction ID</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->qty }}</td>
                <td>{{ $order->full_name }}</td>
                <td>{{ $order->contact }}</td>
                <td>{{ $order->email }}</td>
                <td>{{ $order->address }}</td>
                <td>{{ $order->status }}</td>
                <td>{{ $order->payment_status }}</td>
                <td>{{ $order->transaction_id }}</td>
                <td>{{ $order->price }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
