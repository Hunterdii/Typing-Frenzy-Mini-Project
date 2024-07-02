<?php session_start();  
include("config.php");
    // Check if the form is submitted

    if(isset($_POST['login'])) {
      $sql = mysqli_query($con,
      "SELECT * FROM registration WHERE uname='"
      . $_POST["username"] . "' AND
      pwd='" . $_POST["password"] . "'    ");
     
      $num = mysqli_num_rows($sql);
     
      if($num > 0) {
          $row = mysqli_fetch_array($sql);
          header("location:main.php");
          exit();
      }
      else {
  ?>
  <hr>
  <font color="red"><b>
          <h3>Sorry Invalid Username and Password<br>
              Please Enter Correct Credentials</br></h3>
      </b>
  </font>
  <hr>
   
  <?php
        }
  }
  ?>
  

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="login_style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <header>Login</header>
    <form method="POST" action="">
    <div class="field username">
        <div class="input-area">
          <input type="text" name="username" placeholder="Username">
          <i class="icon fas fa-user"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Username can't be blank</div>
      </div>
      <div class="field password">
        <div class="input-area">
          <input type="password" name="password" placeholder="Password">
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <div class="error error-txt">Password can't be blank</div>
      </div>

      <!-- <div class="pass-txt"><a href="#">Forgot password?</a></div> -->
      <input type="submit" value="Login" name="login">
    </form>
    <div class="sign-txt">Not yet member? <a href="register.php">Signup now</a></div>
  </div>

  <script src="login_script.js"></script>

</body>
</html>
