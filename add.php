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

  input[type=text],
  select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=number],
  select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }


  input[type=submit] {
    width: 100%;
    background-color: #276BC0;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  input[type=submit]:hover {
    background-color: #276BC0;
  }

  div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
  }
</style>

<head>
  <title>student</title>
</head>

<body>
  <h1>
    <center><u>STUDENT DETAILS FORM</u></center>
  </h1><br>
  <div class="container">
    <form action="connect.php" method="POST">
      <label for="Sname">
        <p style=font-family:calibri;font-size:20px;>Student Name:</p>
      </label>
      <input type="text" id="Sname" name="sname" placeholder="Student Name.." required>

      <label for="rollno">
        <p style=font-family:calibri;font-size:20px;>Roll.No:</p>
      </label>
      <input type="number" id="rollno" name="rollno" placeholder="Student Roll.No" required>

      <label for="dob">
        <p style=font-family:calibri;font-size:20px;>Date Of Birth:</p>
      </label>
      <input type="date" id="dob" name="dob" placeholder="Enter Date Of Birth" required>

      <label for="fname">
        <p style=font-family:calibri;font-size:20px;>Father's Name:</p>
      </label>
      <input type="text" id="fname" name="fname" placeholder="Father's name" required>

      <p style=font-family:calibri;font-size:20px;>Subject:</p>

      <label for="hindi">Hindi</label>
      <input type="number" id="hindi" name="hindi" placeholder="Enters marks out of 100" required>

      <label for="english">English</label>
      <input type="number" id="english" name="english" placeholder="Enters marks out of 100" required>

      <label for="math">Math</label>
      <input type="number" id="math" name="math" placeholder="Enters marks out of 100" required>

      <label for="science">Science</label>
      <input type="number" id="science" name="science" placeholder="Enters marks out of 100" required>

      <label for="computer">Computer</label>
      <input type="number" id="computer" name="computer" placeholder="Enters marks out of 100" required>

      <input type="submit" value="SUBMIT">
    </form>
  </div>
</body>

</html>