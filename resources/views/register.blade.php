<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign Up For Free</title>
  <link rel="stylesheet" href="{{ asset('assets/css/registerstyle.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/bootsrap.css') }}">
  
</head>
<body>
  <div class="container mt-5">
    <h1>Welcome to <span class="brand">SOLASOK</span>TV</h1>
    <p class="subtext">Getting Started</p>
    <form action="{{ route('saveData') }}" method="POST">
      @csrf
      @method('post');
      <div class="mb-3">
        <input type="text" class="form-control" id="username" placeholder="Fullname" name="username">
      </div>
      <div class="mb-3">
        <input type="email" class="form-control" id="email" placeholder="solasoktv@email.com" name="email">
      </div>
      <div class="mb-3">
        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
      </div>
      <div class="terms">
        <input type="checkbox" id="terms" name="terms" required>
        <label for="terms">I agree to the <a href="#">Terms & Conditions</a></label>
      </div>
      <button type="submit" class="btn btn-primary register-button">Register</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
