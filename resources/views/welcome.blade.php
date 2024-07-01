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
            background-color: #575757;
            color: white;
            padding: 0.5em 1em;
            text-decoration: none;
            text-align: center;
        }
        .navbar {
            display: flex;
            justify-content: center;
            background-color: #333;
            padding: 1em 0;
        }
        .navbar a {
            color: white;
            padding: 0.5em 1em;
            text-decoration: none;
            text-align: center;
        }
        .navbar a:hover{
            background-color: #575757;
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
    <div class="navbar">
        <a href="/">Home</a>

        @auth
        <form action="/logout" method="POST">
            @csrf
            <a href="/logout"><button type="submit" class="button">Logout</button></a>
        </form> 
        
        @else
        <a href="/login">Login</a>
        @endauth

        <a href="register">Register</a>
        <a href="/employee">Add Employee</a>
        <a href="/">Create Payslip</a>
    </div>
    <div class="container">

        @auth
        <h1>You are logged in!</h1>
        <p>Show employees here</p>


        <div class="container py-md-5 container--narrow">
            <h2 class="text-center mb-4">Employees</h2>
            <div class="list-group">
              <a href="/employeeDetails" class="list-group-item list-group-item-action">
                <img class="avatar-tiny" />
                <strong>Example Employee #1</strong>
                <span class="text-muted small">by employeeID on 1/3/2019</span>
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                <img class="avatar-tiny" />
                <strong>Example Employee #2</strong>
                <span class="text-muted small">by employeeID on 1/3/2019</span>
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                <img class="avatar-tiny" />
                <strong>Example Employee #3</strong>
                <span class="text-muted small">by employeeID on 1/3/2019</span>
              </a>
              <a href="#" class="list-group-item list-group-item-action">
                <img class="avatar-tiny" />
                <strong>Example Employee #4</strong>
                <span class="text-muted small">by employeeID on 1/3/2019</span>
              </a>
            </div>
          </div>
        
        @else
        <h1>Welcome to the Main Menu</h1>
        <p>Select an option from the navigation bar.</p>
        @endauth
    </div>
</body>
</html>