<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link rel="stylesheet" href="{{ asset('assets/css/bootsrap.css') }}">
<style>
  body {
    background-color: black; /* Set background color of the body */
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
  }
  .container {
    background-color: #555555; /* Light black or gray background */
    padding: 60px; /* Decreased padding */
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 400px; /* Decreased width */
    margin-top: 60px; /* Added margin-top to move it higher */
    text-align: center; /* Center align text */
  }
  .form-title {
    text-align: center;
    color: #ffffff; /* White text color */
    margin-bottom: 20px; /* Added margin bottom for spacing */
  }
  .subtitle {
    text-align: center;
    color: #ffffff; /* White text color */
  }
  .orange-square {
    background-color: orange; /* Orange background color */
    padding: 5px 10px; /* Padding for space around the word "Form" */
    border-radius: 5px; /* Rounded corners */
  }
  .orange-square .orange-square-text {
    color: black; /* Set color of the text within orange-square to black */
  }
  .login-account-text {
    text-align: center;
    color: #ffffff; /* White text color */
    margin-top: 20px; /* Added margin top for spacing */
  }
  .form-control {
    width: calc(200% - 25rem); /* Make text boxes wider */
    height: 52px; /* Increase height */
    background-color: transparent; /* Transparent background color */
    color: #ffffff; /* White text color */
    margin: 1px auto; /* Center horizontally with smaller margin */
  }
  .btn-login {
    display: block; /* Make the button a block element */
    margin: 20px auto; /* Center the button horizontally */
    width: 100px; /* Set a custom width for the button */
    background-color: orange; /* Set the background color to orange */
    color: black; /* Set text color to white */
    border: none; /* Remove border */
    padding: 10px; /* Add padding */
    border-radius: 5px; /* Add border-radius for rounded corners */
    text-align: center; /* Center text horizontally */
    text-decoration: none; /* Remove underline */
  }
  .form-check-label {
    color: #ffffff; /* Set color of the label text to white */
  }
  .remember-label {
    font-size: 12px; /* Set font size */
    color: #ffffff; /* Set color to white */
  }
  .signup-text {
    color: #ffffff; /* Set color to white */
    font-size: 14px; /* Set font size */
  }
  .signup-link {
    color: orange; /* Set color to orange */
    text-decoration: none; /* Remove underline */
  }
  .forgot-text {
    color: #ffffff; /* Set color to white */
    font-size: 14px; /* Set font size */
  }
  .forgot-link {
    color: orange; /* Set color to orange */
    text-decoration: none; /* Remove underline */
  }
</style>
</head>
<body>
<div class="container mt-5">
  <h1 class="form-title">SOLASOK<span class="orange-square"><span class="orange-square-text">TV</span></span></h1> <!-- Removed space between "Login" and "Form" -->
  <h4 class="subtitle">Member Sign In</h4> <!-- Added member sign in subtitle -->
  <p class="login-account-text">Access your SolasokTV Account</p> <!-- Added text for accessing login account -->
  <form>
    <div class="mb-3">
      <input type="text" class="form-control" id="username" placeholder="Username"> <!-- Removed label for "Username" -->
    </div>
    <div class="mb-3">
      <input type="password" class="form-control" id="password" placeholder="Password"> <!-- Removed label for "Password" -->
    </div>
    <div class="form-check mb-3">
      <input class="form-check-input" type="checkbox" value="" id="terms">
      <label class="form-check-label" for="terms">
        Remember me on this computer
      </label>
      <span class="remember-label">(not recommended on public or shared computer)</span>
    </div>
    <a href="{{route('dashboard')}}" class="btn btn-primary btn-login" name="submit"><strong>Sign In</strong></a>
    <p class="signup-text">Don't have an account yet? <a href="signup.html" class="signup-link">Sign Up here</a></p>
    <p class="forgot-text"><a href="forgot.html" class="forgot-link">Forgot Username or Password</a> | <a href="resend.html" class="forgot-link">Resend Confirmation Email</a></p>
  </form>
</div>
<script src="{{asset('assets/js/jquery.js')}}"></script>
</body>
</html>
