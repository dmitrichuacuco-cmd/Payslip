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
<div class="navbar">
    <td><img src="../images/Electro.png" alt="" style="width: 140px"></td>
    <a href="/">Home</a>
    @auth
    <form action="/logout" method="POST">
        @csrf
        <button href="/logout" type="submit" class="button">Logout</button>
    </form> 
    
    @else
    <a href="login">Login</a>
    <a href="register">Register</a>
    @endauth

    
    
    @auth
    <a href="/employee">Add Employee</a>
    <a href="/employeeProfile/{{auth()->user()->name}}">View Employee List</a>
    <!--<a href="/inventory">Create Inventory Item</a> -->
    <a href="/sample">Sample Print</a>
    @endauth

</div>

{{$slot}}