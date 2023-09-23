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

error_reporting(0);
$rn=$_GET['rn'];
$sn=$_GET['sn'];
$db=$_GET['date'];
$fn=$_GET['fn'];
$hn=$_GET['hn'];
$en=$_GET['en'];
$mt=$_GET['mt'];
$sc=$_GET['sc'];
$co=$_GET['co'];
?>
<html>
<style>
  body 
  {
  background: url('img/bg.jpg') no-repeat center;
  background-size: cover;
  font-family: sans-serif;
  }
  .container {
    background-color: #f0f7f4;
    width: 60%;
    margin: auto;
  }
  .update_form {
    padding: 1rem;
    display: flex;
    flex-direction: column;
  }
  .update_form>div {
    display: flex;
    justify-content: space-evenly;
  }
  .update_form>div>label {
    flex: 0.3;
    align-self:center;
  }
  .update_form>div>input {
    flex: 0.7
  }
input[type=text], select {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=number], select {
  width: 60%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


input[type=submit] {
  width: 60%;
  background-color: #276BC0;
  color: white;
  padding: 14px 20px;
  margin: 2rem auto;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color:#276BC0;
}

</style>
<head><title>student</title></head>
<body>
<h1><center><u>UPDATE</u></center></h1><br>
<div class="container">
  <form class="update_form">
    <div>
    <label>Student Name:</label>
    <input type="text" value="<?php echo "$sn" ?>" name="sname" >
    </div>
    <br>
    <div>
    <label>Roll.No:</label>
    <input type="text" value="<?php echo "$rn" ?>" name="rollno">
    </div>
    <br>
    <div>
    <label>Date Of Birth:</label>
    <input type="date" value="<?php echo strftime('%Y-%m-%d', strtotime($db));?>" name="birth" >
    </div>
    <br>
    <div>
    <label>Father's Name:</label>
    <input type="text" value="<?php echo $fn ?>" name="fname"> 
    </div>
    <br>
    <div>
    <label>Hindi</label>
    <input type="text" value="<?php echo "$hn" ?>" name="hindi">
    </div>
    <br>
    <div>
    <label>English</label>
    <input type="text" value="<?php echo "$en"?>" name="english" >
    </div>
    <br>
    <div>
    <label>Math</label>
    <input type="text" value="<?php echo "$mt"?>" name="math">
    </div>
    <br>
    <div>
    <label>Science</label>
    <input type="text" value="<?php echo "$sc"?>" name="science">
    </div>
    <br>
    <div>
    <label>Computer</label>
    <input type="text" value="<?php echo "$co"?>" name="computer">
    </div>

    <input type="submit" value="UPDATE" name="submit">
  </form>
</div>
</body>
</html>

<?php

if ($_GET['submit'])
{
    $rollno = $_GET['rollno'];
    $sname=$_GET['sname'];
    $do= $_GET['birth'];
    $fname = $_GET['fname'];
    $hindi = $_GET['hindi'];
    $english = $_GET['english'];
    $math = $_GET['math'];
    $science = $_GET['science'];
    $computer = $_GET['computer'];
    $total=$hindi+$english+$math+$science+$computer;
    $percentage=$total * 0.2;
    

    $query = "update studetail set sname='$sname', dob='$do' , fname='$fname',hindi='$hindi',english='$english',math='$math',science='$science',computer='$computer',total='$total',percent='$percentage' where rollno='$rollno'";
    $data = mysqli_query($con,$query);
     if($data)
     {
         echo "<script>alert('Record Updated')</script>";
         header("refresh:0; url=dash.php");
     }
     else
     {
        echo "failed to update";
     }
}
?>