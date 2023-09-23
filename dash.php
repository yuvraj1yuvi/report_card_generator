<html>
<head>
<title>Display Record</title>

<style>
.container {
    background-color: #f0f7f4;
    width: 90%;
    margin: auto;
}

tr {
    text-align: center;
    border: 1px solid #141414;
}
.table__container {
    margin: 1rem auto;
}

.main__heading {
    background-color: #276BC0;
    color: #ffffff;
    font-size: 4rem;
}

#editbtn
{
    background-color: #276BC0;
    color:white;
    width:5rem;
    font-size: 18px;
    height: 32px;
    border: none;
    outline: none;
    cursor: pointer;
}
#dltbtn
{
    background-color: #C14953;
    color:white;
    width:5rem;
    font-size:18px;
    height:32px;
    border: none;
    outline: none;
    cursor: pointer;
}
.sub_container{
display: flex;
justify-content: space-between;
width: 90%;
margin: auto;
}
.btn{
    text-decoration: none;
    display:flex;
    justify-content:center;
    align-items:center;
}
</style>
</head>
<body>
    <div class="container">
        <h1 class="main__heading"><center>TEACHER PANEL</center></h1>
    <table cellspacing="10" class="table__container">
        <tr>
        <th>Roll.no</th>
        <th>Student Name</th>
        <th>DOB</th>
        <th>Father's Name</th>
        <th>Hindi</th>
        <th>English</th>
        <th>Math</th>
        <th>Science</th>
        <th>Computer</th>
        <th>Total</th>
        <th>Percentage</th>
        <th colspan="2" align="">Operation</th>
        </tr>
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
$query = "SELECT * from studetail";
$data =mysqli_query($con,$query);
$total = mysqli_num_rows($data);

if($total!=0)
{
    
    while($result=mysqli_fetch_assoc($data))
    {
        echo "
        <tr>
        <td>".$result['rollno']."</td>
        <td>".$result['sname']."</td>
        <th>".$result['dob']."</td>
        <td>".$result['fname']."</td>
        <td>".$result['hindi']."</td>
        <td>".$result['english']."</td>
        <td>".$result['math']."</td>
        <td>".$result['science']."</td>
        <td>".$result['computer']."</td>
        <td>".$result['total']."</td>
        <td>".$result['percent']."</td>
        <td><a href='update.php?rn=$result[rollno] & sn=$result[sname] & date=$result[dob] & fn=$result[fname] & hn=$result[hindi] & en=$result[english] & mt=$result[math] & sc=$result[science] & co=$result[computer]'><input type='submit' value='Update' id='editbtn'></td>
        <td><a href='delete.php?rn=$result[rollno]' onclick='return checkdelete()'><input type='submit' value='Delete' id='dltbtn'></td>";
    }
}
else{
    echo "No recored found";
}
?>
    <div class="sub_container">
        <a href="add.php" class="btn" id='editbtn'><span class="btn__text">New Entry</span></a>
        <a href="index.html" class="btn" id='editbtn'><span class="btn__text">Logout</span></a>    
    </div>
    <hr>
</div>
</body>
</html>