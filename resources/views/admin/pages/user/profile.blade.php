@extends('admin.master')
@section('content')

<!--
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        section {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        img {
            max-width: 150px;
            height: 200px;
            border-radius: 150px;
            margin-bottom: auto;
        }

        h2,
        p {
            color: #333;
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <header>
        <h1>Admin Profile</h1>
    </header>

    <section>
        <img src="{{ asset('/backend/img/profile.jpg') }}" alt="Admin Profile Picture">
        <h2>Burhan Uddin Rana </h2>
        <p>Web Developer</p>
        <p>Email: burhaniubat2020@gmail.com</p>
        <p>GitHub: <a href="https://github.com/BR20Rana" target="_blank">github.com/admin</a></p>
        <p>LinkedIn: <a href="https://www.linkedin.com/in/burhan-uddin-rana-23b14b254/" target="_blank">linkedin.com/in/admin</a></p>
        <p id="bio">About Me: I am a Laravel based website developer. I complete my graduation from IUBAT. Now I am a full time website developer..</p>
        <button onclick="toggleBio()">Toggle Bio</button>
    </section>

    <script>
        function toggleBio() {
            var bio = document.getElementById('bio');
            bio.style.display = (bio.style.display === 'none' || bio.style.display === '') ? 'block' : 'none';
        }
    </script>

</body>

</html>
    -->

    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        section {
            max-width: 600px;
            margin: 20px auto;
            background-color: #e6f7ff; /* Light blue background color */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        img {
            max-width: 150px;
            height: 200px;
            border-radius: 150px;
            margin-bottom: auto;
        }

        h2,
        p {
            color: #3366cc; /* Dark blue text color */
        }

        button {
            background-color: #333;
            color: #fff;
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <header>
        <h1>Admin Profile</h1>
    </header>

    <section>
        <img src="{{ asset('/backend/img/profile.jpg') }}" alt="Admin Profile Picture">
        <h2>Burhan Uddin Rana </h2>
        <p>Web Developer</p>
        <p>Email: burhaniubat2020@gmail.com</p>
        <p>GitHub: <a href="https://github.com/BR20Rana" target="_blank">github.com/admin</a></p>
        <p>LinkedIn: <a href="https://www.linkedin.com/in/burhan-uddin-rana-23b14b254/" target="_blank">linkedin.com/in/admin</a></p>
        <p id="bio">About Me: I am a Laravel based website developer. I complete my graduation from IUBAT. Now I am a full time website developer..</p>
        <button onclick="toggleBio()">Toggle Bio</button>
    </section>

    <script>
        function toggleBio() {
            var bio = document.getElementById('bio');
            bio.style.display = (bio.style.display === 'none' || bio.style.display === '') ? 'block' : 'none';
        }
    </script>

</body>

</html>

@endsection