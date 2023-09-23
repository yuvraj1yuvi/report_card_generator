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
    <form action="result.php" method="POST" class="form">
      <img src="img/student.png" alt="">
      <h2>Student</h2>
      <div class="input-group">
        <input type="number" name="roll" id="roll" required>
        <label for="rollno">Enter Roll Number</label>
      </div>
      <input type="submit" name="submit" value="Login" class="submit-btn">
    </form>
  </div>
</body>
</html>