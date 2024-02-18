<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Age Verification</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      background-color: #f5f5f5;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .age-verification-form {
      text-align: center;
    }

    .age-verification-form p {
      font-size: 20px;
      margin-bottom: 20px;
    }

    .yes-button, .no-button {
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .yes-button {
      background-color: #4caf50;
      color: #fff;
    }

    .no-button {
      background-color: #f44336;
      color: #fff;
    }

    .yes-button:hover, .no-button:hover {
      opacity: 0.8;
    }
  </style>
</head>
<body>
  <div class="container">
    <form action="{{route('welcome')}}" class="age-verification-form">
      <p>Are you above 18 years old?</p>
      <button class="yes-button" name="yes" value="yes">Yes</button>
      <button class="no-button" name="no" value="no">No</button>
    </form>
  </div>
</body>
</html>
