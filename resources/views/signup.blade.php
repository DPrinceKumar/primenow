<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup | News Prime</title>
    <link rel="stylesheet" type="text/css" href="{{ url('css/loginpage.css') }}">
    <script src="{{ url('js/script.js') }}"></script>
</head>
<body>
    <div class="loginBox">
        <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
        <h3>Sign up here</h3><br>
        <form class="form-inline" action="/register" method="POST" id="frm">
            @csrf
            <label for="full_name">Full Name:</label>
            <input type="text" class="form-control" name="full_name" placeholder="Enter name" id="usernameup">
            <span id="name_error" class="field_error" style=" color: #FF0000"> @error('email'){{$message}} @enderror </span>
            <br><br>
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email" id="emailup">
            <span id="email_error" class="field_error" style="color: #FF0000"> @error('email'){{$message}} @enderror </span>
            <br><br>
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="password" placeholder="Enter password" id="pwdup">
            <span id="password_error" class="field_error" style="color: #FF0000"> @error('password'){{$message}} @enderror
            </span> <br><br>
            <label for="con_password">Confirm Password:</label>
            <input type="password" class="form-control" name="con_password" placeholder="confirm Password">
            <span id="password_error" class="field_error" style="color: #FF0000"> @error('password'){{$message}} @enderror
            </span> <br><br>
            <button type="submit" class="btn btn-primary" value="Log In" id="submitup">Sign Up</button>
            @csrf
        </form>
         <div>
            <p class="register">Already have an account?<a href="/login"> Login</a></p>
        </div>
    </div>
    <div id="done" class="field_error">
    </div>
</body>
</html>