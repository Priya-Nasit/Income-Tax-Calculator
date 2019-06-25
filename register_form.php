<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
  <link  href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/util.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/main.css">

</head>
<body>
<?php echo validation_errors('<div class="alert alert-danger">','</div>');?>

  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(<?php echo base_url(); ?>assets/image/incometax.jpg"?>
          <span class="login100-form-title-1">
            Register
          </span>
        </div>

        <form class="login100-form validate-form" action="" method="POST">
          <div class="wrap-input100 validate-input m-b-26">
            <span class="label-input100">Username</span>
            <input class="input100" type="text" name="username" id="username" placeholder="Enter username">
            <span class="focus-input100"></span>
          </div>

           <form class="login100-form validate-form" action="" method="POST">
          <div class="wrap-input100 validate-input m-b-26">
            <span class="label-input100">Lastname</span>
            <input class="input100" type="text" name="lastname" id="Lastname" placeholder="Enter lastname">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-18">
            <span class="label-input100">Email</span>
            <input class="input100" type="text" name="email" id="password" placeholder="Enter password">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-18">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="password" id="password" placeholder="Enter password">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-18">
            <span class="label-input100">Confirm Password</span>
            <input class="input100" type="password" name="password" id="password" placeholder="Enter password">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-18">
            <span class="label-input100">Gender</span>
            <select class="input100" id="gender" name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
          </div>

          <div class="wrap-input100 validate-input m-b-18">
            <span class="label-input100">Phone</span>
            <input class="input100" name="phone" id="phone" placeholder="Enter phone number">
            <span class="focus-input100"></span>
          </div>

          

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" name="register">
              Register
            </button><br><br><br><br></div>

             <div>
              <a href="redirect_login" class="txt1">
                Already have Account
              </a>

            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.css"></script>

</body>
</html>