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
    <title>Payslip</title>
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
<div class="container py-md-5 container--narrow">
    <h2 class="text-center mb-4">Create payslip for: </h2>
    <div class="list-group">
        @foreach($employees as $employee)

        <a href="/payslipDetails/{{$employee->id}}" class="list-group-item list-group-item-action">
            <img class="avatar-tiny" />
            <strong>{{$employee->name}}</strong>
            <span class="text-muted small">id number: {{$employee->idNumber}} on 1/3/2019</span>
          </a>

        @endforeach
      
    </div>
  </div>