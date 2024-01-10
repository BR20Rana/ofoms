

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration </title>

    <!-- Bootstrap CSS (assuming you are using Bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: url('/frontend/images/fastfood.jpg') center center fixed;
            background-size: cover;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.8); /* Adjust the background color and opacity as needed */
            padding: 20px;
            border-radius: 10px;
            width: 400px; /* Adjust the width as needed */
        }

        /* Optional: Add additional styles for form elements if needed */
        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="form-container">
        <form action="{{ route('customer.registration') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="name"> Name: </label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS (assuming you are using Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
