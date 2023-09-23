<?php

    $con=new mysqli('localhost','root','');
    
    
    if(!$con)
    {
        echo 'Not Connected To Server';
    }
    if(!mysqli_select_db($con,'student'))
    {
        echo 'Database Not Selected';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Login Form Demo</title>
</head>
<body>
  <div class="login-wrapper">
    <form action="" method="POST" class="form">
      <img src="img/avatar.png" alt="">
      <h2>Teacher</h2>
      <div class="input-group">
        <input type="text" name="loginUser" id="loginUser" required>
        <label for="loginUser">User Name</label>
      </div>
      <div class="input-group">
        <input type="password" name="loginPassword" id="loginPassword" required>
        <label for="loginPassword">Password</label>
      </div>
      <input type="submit" name="submit" value="Login" class="submit-btn">
    </form>
  </div>
</body>
</html>
<?php
    if(isset($_POST['submit']))
    {
      $email=$_POST['loginUser'];
      $pwd=$_POST['loginPassword'];
      $query= "SELECT * FROM admin WHERE email='$email' && password='$pwd'";
      $data= mysqli_query($con,$query);
      $total=mysqli_num_rows($data);
      if($total == 1)
      {
        header('location:dash.php');
      }
      else
      {
        echo "login fail";
      }
    }
?>
