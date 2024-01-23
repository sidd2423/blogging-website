<!-- @if($errors->any())
 <ul>
  @foreach($errors->all() as $error)
   <li>{{ $error }}</li>
   @endforeach

</ul>
@endif

<form action= "{{ route('userRegister') }}" method = "POST">
    @csrf

    <input type = "text" name = "name" placeholder="Enter Name">
    <br><br>
    <input type = "email" name = "email" placeholder="Enter Email">
    <br><br>
    <input type = "password" name = "password" placeholder="Enter Password">
    <br><br>
    <input type = "password" name = "password_confirmation" placeholder="Enter Confirm Password">
    <br><br>
    <input type="submit" value="Register">

</form>

@if(\Session::has('success'))
<p style="color:blue;">{{  \Session::get('success') }}</p>
@endif -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #000;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .registration-form {
      background-color: #fff;
      padding: 40px; /* Increased padding for a larger box */
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      animation: zoomIn 0.6s ease-in-out; /* Zoom-in animation */
    }

    @keyframes zoomIn {
      from {
        transform: scale(0.5);
        opacity: 0;
      }
      to {
        transform: scale(1);
        opacity: 1;
      }
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 10px; 
      color: #02624f; 
      font-size: 18px; /* Adjusted font size */
    }

    input {
      width: 100%;
      padding: 15px; /* Increased padding for input */
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      background-color: #fff; /* White background for email input */
      color: #0D98BA; /* Updated color */
      font-size: 17px; /* Adjusted font size */
    }

    button {
      padding: 15px; /* Increased padding for button */
      background-color: rgb(12, 112, 5);
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 18px; /* Increased font size */
    }

    button:hover {
      background-color: rgb(10, 87, 9);
    }

    .alert {
      background-color: #f8d7da;
      color: #721c24;
      padding: 15px; /* Increased padding */
      border-radius: 4px;
      margin-bottom: 20px;
      font-size: 16px; /* Increased font size */
    }
  </style>
</head>
<body>

@if($errors->any() || \Session::has('error'))
  <div class="alert">
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
      @if(\Session::has('error'))
        <li>{{ \Session::get('error') }}</li>
      @endif
    </ul>
  </div>
@endif

<div class="registration-form">
  <form action="{{ route('userRegister') }}" method="POST">
    @csrf
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" name="name" id="name" placeholder="Enter Name">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" placeholder="Enter Email">
    </div>

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" placeholder="Enter Password">
    </div>

    <div class="form-group">
      <label for="password_confirmation">Confirm Password:</label>
      <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Enter Confirm Password">
    </div>

    <div class="form-group">
      <button type="submit">Register</button>
    </div>
  </form>
</div>

</body>
</html>
