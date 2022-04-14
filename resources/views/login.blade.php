<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | News Prime</title>
    <link rel="stylesheet" type="text/css" href="{{ url('css/loginPage.css') }}">
</head>

<body>

    <div class="loginBox">
        <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
        <h3>Sign in here</h3><br>
        
        <form class="form-inline" action="login" method="POST" id="frm_login">
            @csrf
            <label for="email">Email address:</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email" id="email">
            <span style="color: red"> @error('email'){{$message}} @enderror </span> <br><br>

            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="password" placeholder="Enter password" id="btnlogin">
            <span style="color: red"> @error('password'){{$message}} @enderror </span> <br><br>
            <button type="submit" class="btn btn-primary" value="Log In">Login</button>
        <div>
            <p class="register">Dont have an account?<a href="/signup"> Register</a></p>
        </div>
        </form>
    </div>
</body>

</html>