<!-- <?php if($errors->any()): ?>
 <ul>
  <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <li><?php echo e($error); ?></li>
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ul>
<?php endif; ?>

<?php if(\Session::has('error')): ?>
<p style="color:red;"><?php echo e(\Session::get('error')); ?></p>
<?php endif; ?>

<form action= "<?php echo e(route('userLogin')); ?>" method = "POST">
    <?php echo csrf_field(); ?>
    <input type = "email" name = "email" placeholder="Enter Email">
    <br><br>
    <input type = "password" name = "password" placeholder="Enter Password">
    <br><br>
    <input type="submit" value="Login">

</form>


<?php if($errors->any()): ?>
  <div class="alert alert-danger">
    <ul>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
<?php endif; ?> -->

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

    @keyframes  zoomIn {
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
      position: relative;
    }

    label {
      display: block;
      font-weight: bold;
      margin-bottom: 20px; 
      color: #02624f; 
      font-size: 20px; /* Increased font size */
    }

    input {
      width: 100%;
      padding: 15px; /* Increased padding for input */
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      background-color: #fff; /* White background for email input */
      color: #0D98BA; /* Updated color */
      font-size: 16px; /* Increased font size */
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

    .register-button {
      position: absolute;
      bottom: 102px; /* Adjusted position */
      left: 50%;
      transform: translateX(-50%);  
      text-align: center-left;
      display: block;
      background-color: #0c7005; /* Adjusted color */
      color: #fff;
      padding: 15px; /* Increased padding for button */
      border: none;
      border-radius: 4px;
      cursor: pointer;
      font-size: 18px; /* Increased font size */
      text-decoration: none; /* Remove underline from the link */
   

    }
    .register-button:hover {
      background-color: #0a5709; /* Adjusted color on hover */
    }
  </style>
</head>
<body>

<?php if($errors->any() || \Session::has('error')): ?>
  <div class="alert">
    <ul>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php if(\Session::has('error')): ?>
        <li><?php echo e(\Session::get('error')); ?></li>
      <?php endif; ?>
    </ul>
  </div>
<?php endif; ?>

<div class="registration-form">
  <form action="<?php echo e(route('userLogin')); ?>" method="POST">
    <?php echo csrf_field(); ?>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" placeholder="Enter Email">
    </div>

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" placeholder="Enter Password">
    </div>

   
      <button type="submit">Login</button>
      
    </div>

    <a href="<?php echo e(route('userRegister')); ?>" class="register-button">Register Now</a>

   

  </form>
</div>

</body>
</html>

<?php /**PATH C:\Users\Owner\Desktop\Web developmentfolder\flaravelBlog\resources\views/login.blade.php ENDPATH**/ ?>