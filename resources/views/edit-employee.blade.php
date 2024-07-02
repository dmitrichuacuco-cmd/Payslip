<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        .container {
            background-color: #fff;
            padding: 2em;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            width: 300px;
        }
        h1 {
            text-align: center;
            margin-bottom: 1em;
        }
        .form-group {
            margin-bottom: 1em;
        }
        label {
            display: block;
            margin-bottom: 0.5em;
        }
        input {
            width: 100%;
            padding: 0.5em;
            box-sizing: border-box;
        }
        .button {
            width: 100%;
            padding: 0.5em;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Update an Employee</h1>
        <form action="/employeeDetails/{{$employee->id}}" method="POST">
            @csrf
            @method("PUT")
            <div class="form-group">
                <label for="name">Name</label>
                <input value="{{($employee->name)}}" type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input value="{{($employee->email)}}" type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="name">Department</label>
                <input value="{{($employee->department)}}" type="text" id="name" name="department" required>
            </div>
            <div class="form-group">
                <label for="name">Job Title</label>
                <input value="{{($employee->job)}}" type="text" id="name" name="job" required>
            </div>
            <div class="form-group">
                <label for="name">Salary</label>
                <input value="{{($employee->salary)}}" type="number" id="name" name="salary" required>
            </div>
            <div class="form-group">
                <label for="name">Id Number</label>
                <input value="{{($employee->idNumber)}}" type="number" id="name" name="idNumber" required>
            </div>

            <button type="submit" class="button">Save Changes</button>
        </form>
    </div>
</body>
</html>