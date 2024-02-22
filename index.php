<?php
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>phone tracking system</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>

<div class="nav">
  <input type="checkbox" id="nav-check">
  <div class="nav-header">
    <div class="nav-title">
      phone tracking system
    </div>
  </div>
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
  
  <div class="nav-links">
    <a href="index.html" target="_blank">home</a>
    <a href="aboutus.html" target="_blank">about us</a>
    <a href="" target="_blank">contact us</a>
    <a href="location.html" target="_blank">map</a>
    
  </div>
</div>
<style>
  /* background image */
  body {
    background-image: url('img.jpeg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%;
  }
  </style>
 <div class="container">
  <form action="aboutus.html" method="post">
  <h1>Login</h1>
  <label for="uname"><b>Username</b></label>
  <input type="text" placeholder="Enter Username" name="uname" required>

  <label for="psw"><b>Password</b></label>
  <input type="password" placeholder="Enter Password" name="psw" required>

  <button type="submit">Login</button>
  <label>
    <input type="checkbox" checked="checked" name="remember"> Remember me
  </label>
</div>

<!-- <div class="container" style="">
  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
  <span class="psw">Forgot <a href="#">password?</a></span>
</div> -->
</form>
</div>
</body>
</html>
