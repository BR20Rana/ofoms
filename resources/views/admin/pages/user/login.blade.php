<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Login </title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: url('/frontend/images/logo.png') center center fixed;
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
    

<form  action="{{route('login.post')}}" method="post">
  @csrf
<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card px-5 py-5" id="form1">
                <div class="form-data" >
                    <div class="forms-inputs mb-4"> <span> Email or Username </span> 
                    <input autocomplete="off" type="text" v-model="email" name="email" placeholder="Input Your email" required>                       
                    </div>
                    <div class="forms-inputs mb-4"> <span> Password </span> 
                    <input  type="password"  name="password" placeholder="Input Your Password" required>                       
                    </div>
                    
                    <div class="mb-3"> <button type="submit" class="btn btn-dark w-50"> Login </button> </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
</body>
</html>