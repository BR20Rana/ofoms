<!--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Customer Login </title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form method="POST" action="{{ route('login.store') }}">
        @csrf
        
        <label for="email"> Email: </label>
        <input type="email" id="email" name="email" required>

        <label for="password"> Password: </label>
        <input type="password" id="password" name="password" required>

        <button class="btn btn- primary" type="submit"> Login </button>

    <p> If you are not register yet please do registration Now </p>
    <li>
    <a class="btn btn-success" href="{{route('customer.registration')}}"> Registration </a>
    </li>
    </form>
</body>
</html>
    -->

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Customer Login </title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: url('/frontend/images/burger1.jpg') center center fixed;
            background-size: cover;
        }

        form {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: white; /* Add a background color for better readability */
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form method="POST" action="{{ route('login.store') }}">
        @csrf
        
        <label for="email"> Email: </label>
        <input type="email" id="email" name="email" required>

        <label for="password"> Password: </label>
        <input type="password" id="password" name="password" required>

        <button class="btn btn- primary" type="submit"> Login </button>

        <p> If you are not registered yet, please do registration Now </p>
        <li>
            <a class="btn btn-success" href="{{ route('customer.registration') }}"> Registration </a>
        </li>
    </form>
</body>
</html>
