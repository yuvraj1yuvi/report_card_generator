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

$rollno=$_GET['rn'];
$query = "delete from studetail WHERE rollno='$rollno'";

$data=mysqli_query($con,$query);

if($data)
{
    echo "<font color='green'>Record has been deleted from databse";
    header("refresh:0; url=dash.php");

}
else
{
    echo"<font color='red'>Failed to delete Record from database";
    header("refresh:0; url=dash.php");
}
?>