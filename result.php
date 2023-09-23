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
        
        if(isset($_POST['submit']))
        {
          $roll= $_POST['roll'];  

        $query = "SELECT * FROM studetail WHERE rollno='$roll'";
          $data=mysqli_query($con,$query);
          $total=mysqli_num_rows($data);
          if($total == 1)
          {
            while($result=mysqli_fetch_assoc($data))
            {
                $rn=$result['rollno'];
                $sn=$result['sname'];
                $dob=$result['dob'];
                $fn=$result['fname'];
                $hin=$result['hindi'];
                $eng=$result['english'];
                $math=$result['math'];
                $sci=$result['science'];
                $com=$result['computer'];
                $total=$result['total'];
                $per=$result['percent'];  
            }
            
          }
          else
          {
            header('location:error.html');
          } 
        }  
        
    ?>
    <html>
<style>
  .container {
    background-color: #f0f7f4;
    width: 60%;
    margin: auto;
  }
  .main__heading {
    background-color: #276BC0;
    color: #ffffff;
    font-size: 4rem;
  }
  .subjects__list {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }
  .subjects__list .subjects__list__subcontainer input {
    background: transparent;
    border: none;
    outline: none;
    font-weight: 700;
    font-size: 1rem;
  }
  .subjects__list .subjects__list__subcontainer:last-child{
    display: flex;
  }
  .subjects__list .subjects__list__subcontainer:last-child label {
    font-weight: 900;
    font-size: 1rem;
  }
  .subjects__list .subjects__list__subcontainer:last-child input {
    font-weight: 900;
    font-size: 0.8rem;
    background: transparent;
    border: none;
    outline: none;
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
  .subjects__list__subcontainer{
    display: flex;
    align-items: center;
    width: 100%;
  }
  .subjects__list__subcontainer label{
    flex: 0.3;
  }
  .subjects__list__subcontainer input{
    flex: 0.7;
  }
  .update_form>div>label {
    flex: 0.3;
    align-self:center;
  }
  .update_form>div>input {
    flex: 0.7;
    border: none;
    outline: none;
  }
  .update_form>div:nth-child(3) {
    justify-content: flex-start;
    font-size: x-large;
    font-weight: 400;
  }
  .result__content1 {
    display: flex;
    justify-content: space-between;
  }
  .result__content2 {
    display: flex;
    justify-content: space-between;
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
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 2rem auto;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #276BC0;
}
.logout__btn {
    margin: 3rem auto;
    height: 2rem;
    width: 12rem;
    align-self: center;
    background-color: #276BC0;
    color: #ffffff;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    -webkit-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
    box-shadow: 10px 10px 5px 0px rgba(0, 0, 0, 0.75);
  }
  .logout__btn:hover {
    transform: scale(1.1);
  }
.btn__text {
    font-size: xx-large;
  }

</style>
<head><title>student</title></head>
<body>
<h1 class='main__heading'><center>STUDENT RESULT</center></h1><br>
<div class="container">
  <form class="update_form">
    <div class="result__content1">
      <label>Student Name:</label>
      <input disabled type="text" value="<?php echo $sn?>" name="sname" >
      <label>Roll.No:</label>
      <input disabled type="text" value="<?php echo "$rn" ?>" name="rollno">
    </div>
    <div class="result__content2">
      <label>Date Of Birth:</label>
      <input disabled type="text" value="<?php echo "$dob"?>" name="birth" >
      <label>Father's Name:</label>
      <input disabled type="text" value="<?php echo "$fn" ?>" name="fname"> 
    </div>
    <div>Subjects:</div>
    <div class="subjects__list">
      <div class="subjects__list__subcontainer">
        <label>Hindi</label>
        <input disabled type="text" value="<?php echo "$hin" ?>" name="hindi">
      </div>
      <div class="subjects__list__subcontainer">
        <label>English</label>
        <input disabled type="text" value="<?php echo "$eng"?>" name="english" >
      </div>
      <div class="subjects__list__subcontainer">
        <label>Math</label>
        <input disabled type="text" value="<?php echo "$math"?>" name="math">
      </div>
      <div class="subjects__list__subcontainer">
        <label>Science</label>
        <input disabled type="text" value="<?php echo "$sci"?>" name="science">
      </div>
      <div class="subjects__list__subcontainer">
        <label>Computer</label>
        <input disabled type="text" value="<?php echo "$com"?>" name="computer">
      </div>
      <div class="subjects__list__subcontainer">
        <label>Total</label>
        <input disabled type="text" value="<?php echo "$total"?>" name="computer">
        <label>Percent</label>
        <input disabled type="text" value="<?php echo "$per"?>" name="computer">
      </div>
    </div>
  </form>
</div>
<a href="index.html" class="logout__btn"><span class="btn__text">LOGOUT</span></a>
</body>
</html>

    
