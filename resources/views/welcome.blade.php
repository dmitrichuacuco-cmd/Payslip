<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="main.css" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Menu</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f0f0f0;
        }
        button {
            background-color: #f0f0f0;
            border: none;
            padding: 0.5em 1em;
            text-decoration: none;
            text-align: center;
        }
        .button:hover{
            background-color: #313cb8;
            color: #f0f0f0;
        }
        .navbar {
            display: flex;
            justify-content: center;
            background-color: #f0f0f0;
            padding: 1em 0;
        }
        .navbar a {
            color: #333;
            padding: 0.5em 1em;
            text-decoration: none;
            text-align: center;
        }
        .navbar a:hover{
            background-color: #313cb8;
            color: #f0f0f0;
        }
        .container {
            text-align: center;
            padding: 2em;
        }
        h1 {
            margin-bottom: 1em;
        }
    </style>
</head>
<body>
    
<x-layout>
</x-layout>
    <div class="container">

        @auth
        <h1>You are logged in!</h1>
        @else
        <h1>Welcome to the Main Menu</h1>
        <p>Select an option from the navigation bar.</p>
        @endauth
    </div>
</body>
</html>
