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
    $sname=$_POST['sname'];
    $rollno=$_POST['rollno'];
    $dob=date('Y-m-d',strtotime($_POST['dob']));
    $fname=$_POST['fname'];
    $hindi=$_POST['hindi'];
    $english=$_POST['english'];
    $math=$_POST['math'];
    $science=$_POST['science'];
    $computer=$_POST['computer'];
    $total=$hindi+$english+$math+$science+$computer;
    $percentage=$total * 0.2;
    
    $sql = "INSERT INTO studetail (sname,rollno,dob,fname,hindi,english,math,science,computer,total,percent) values ('$sname','$rollno','$dob','$fname','$hindi','$english','$math','$science','$computer','$total','$percentage')";

    if(!mysqli_query($con,$sql))
    {
        echo 'ROLL.NO ALREDY EXIST PLEASE ENTER DIFFERENT ROLL.NO';
        
    }
    else
    {
        echo 'Your Response Has Submited';
    }

        header("refresh:1; url=dash.php");
?>