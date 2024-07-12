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

    <x-layout>
    </x-layout>

    <title>Employee list</title>

<div class="container py-md-5 container--narrow">
    <h2 class="text-center mb-4">Employees</h2>
    <div class="list-group">

        <table class="table table-bright table-striped-columns">
            <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">id number</th>
                  <th scope="col">action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($employees as $employee)
                <tr>
                  <th scope="row">{{$employee->id}}</th>
                  <td>{{$employee->name}}</td>
                  <td>{{$employee->idNumber}}</td>
                  <td><a href="/employeeDetails/{{$employee->id}}" class="list-group-item list-group-item-action"> View</a></td>
                </tr>
                @endforeach
                
              </tbody>
        </table>
        {{$employees->links()}}
      
    </div>
  </div>