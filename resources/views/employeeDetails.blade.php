<meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="main.css" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<div class="container py-md-5 container--narrow">
    <div class="d-flex justify-content-between">
      <h2>{{$employee->name}}</h2>
      <span class="pt-2">
        <a href="/employeeDetails/{{$employee->id}}/edit" class="text-primary mr-2" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
        <form class="delete-post-form d-inline" action="/employeeDetails/{{$employee->id}}" method="POST">
          @csrf
          @method("DELETE")
          <button class="delete-post-button text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash"></i></button>
        </form>

        <a href="/payslip/{{$employee->id}}">
          <button class="delete-post-button text-primary" data-toggle="tooltip" data-placement="top" title="Payslip"><i class="fas fa-file"></i></button>
        </a>

        <a href="/pdf">
          <button class="delete-post-button text-info" data-toggle="tooltip" data-placement="top" title="Print"><i class="fas fa-print"></i></button>
        </a>
      </span>
    </div>

    <p class="text-muted small mb-4">
      <a href="#"><img class="avatar-tiny" src="" /></a>
      Posted by <a href="#">{{$employee->id}}</a> on 2/3/2019
    </p>

    <div class="body-content">
      <p>Department: {{$employee->department}}</p>
      <p>Salary: {{$employee->salary}}</p>
      <p>Job Title: {{$employee->job}}</p>
      <p>Email: {{$employee->email}}</p>
    </div>
  </div>

  <div class="container py-md-5 container--narrow">
    <h2 class="text-center mb-4">Payslips</h2>
    <div class="list-group">
        

        <div class="payslipContainer" style="width: 600px; border-style: ridge; padding: 10px;">
          <img class="avatar-tiny" />
          <strong>Payslip #{{$employee->id}}</strong>
          <span class="text-muted small">by {{$employee->id}} on {{$employee->id}} 
            <a href="/edit" class="text-primary mr-2" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
            <a href="/payslip/{{$employee->id}}">
              <button class="delete-post-button text-primary" data-toggle="tooltip" data-placement="top" title="Payslip"><i class="fas fa-file"></i></button>
            </a>
            <a href="/pdf">
              <button class="delete-post-button text-info" data-toggle="tooltip" data-placement="top" title="Print"><i class="fas fa-print"></i></button>
            </a>
          </span>
        </div>
        
            


        

        
      
    </div>
  </div>