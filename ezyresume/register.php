<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

  // Check if username is empty
  if (empty(trim($_POST["username"]))) {
    $username_err = "Username cannot be blank";
  } else {
    $sql = "SELECT id FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
      mysqli_stmt_bind_param($stmt, "s", $param_username);

      // Set the value of param username
      $param_username = trim($_POST['username']);

      // Try to execute this statement
      if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        if (mysqli_stmt_num_rows($stmt) == 1) {
          $username_err = "This username is already taken";
        } else {
          $username = trim($_POST['username']);
        }
      } else {
        echo "Something went wrong";
      }
    }
  }

  mysqli_stmt_close($stmt);


  // Check for password
  if (empty(trim($_POST['password']))) {
    $password_err = "Password cannot be blank";
  } elseif (strlen(trim($_POST['password'])) < 5) {
    $password_err = "Password cannot be less than 5 characters";
  } else {
    $password = trim($_POST['password']);
  }

  // Check for confirm password field
  if (trim($_POST['password']) != trim($_POST['confirm_password'])) {
    $password_err = "Passwords should match";
  }


  // If there were no errors, go ahead and insert into the database
  if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
      mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

      // Set these parameters
      $param_username = $username;
      $param_password = password_hash($password, PASSWORD_DEFAULT);

      // Try to execute the query
      if (mysqli_stmt_execute($stmt)) {
        header("location: login.php");
      } else {
        echo "Something went wrong... cannot redirect!";
      }
    }
    mysqli_stmt_close($stmt);
  }
  mysqli_close($conn);
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="style/register.css">
  <link rel="shortcut icon" type="icon/png" href="icon/r.png"> 
  <title>Signup | ezyResume</title>
</head>

<body>
<header class="header">

<a class="logobar" href="#"><img class="logo" src="img/logo3.png"></a>
    
  <form action="" method="post">
    <div class="signup">
      <div class="form">
        <div class="subtitle">Signup !</div>
        <div class="input-container ic1">
          
          <input type="email" class="input" name="username" id="username" placeholder="" required>
          <div class="cut"></div>
          <label for="Email" class="placeholder">Email</label></label>
        </div>
        <div class="input-container ic2">
          <input id="password" name="password" class="input" type="password" placeholder="" required>
          <div class="cut"></div>
          <label for="password" class="placeholder">Password</label>
        </div>
        <div class="input-container ic2">
          <input id="email" name="confirm_password" class="input" type="password" placeholder=""required>
          <div class="cut cut-short"></div>
          <label for="email" class="placeholder">Confirm Password
          </label>
        </div>
        <button type="submit" class="submit">submit</button>
      </div>
    </div>
  </form>
  </header>

  <footer style="margin-top:12px;" class="bg-light text-center text-lg-start">
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); text-align: center; color: white; padding:8px ">
  This Site is designed and Developed By Khushal Dhumane <br> Copyright © 2023 www.ezyResume.unaux.com - All Rights Reserved 
  </div>
</footer>

</body>

</html>