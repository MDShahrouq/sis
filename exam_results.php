<!DOCTYPE html>
<html>
<title>SIS | Exam Results</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Styles/w3.css">
<link rel="stylesheet" href="Styles/w3-theme-teal.css">
<link rel="stylesheet" href="Styles/font-awesome.min.css">
<link rel="stylesheet" href="Styles/bootstrap.min.css" >
<link rel="icon" href="Images/icon.png">
<script src="JavaScripts/jquery.min.js"></script>
<script src="bootstrap.min.js"></script>

<style>
form {

}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}

div2 {
    margin-bottom: 15px;
    padding: 4px 12px;
}

.danger {
    background-color: #ffdddd;
    border-left: 6px solid #f44336;
}

.success {
    background-color: #ddffdd;
    border-left: 6px solid #4CAF50;
}

.info {
    background-color: #e7f3fe;
    border-left: 6px solid #2196F3;
}


.warning {
    background-color: #ffffcc;
    border-left: 6px solid #ffeb3b;
}

th, td {
    padding: 4px;
    text-align: left;
}

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #00688B;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #ADD8E6;
}

.active {
    background-color: #4CAF50;
}

a {
text-decoration:none;
}
</style>
<body>
<center>
<h2>Student Information System</h2>
   <img src="Images/logo.jpg" width="50" >
</center>

<form action="student_information_.php" method="POST">
  <div class="imgcontainer">
  </div>
  <div class="container">
<ul>
  <li><a style="text-decoration:none" href="#home">Record Results</a></li>
  <li><a style="text-decoration:none" href="#news">View Results</a></li>
  <li><a style="text-decoration:none" href="#contact">Erase Database</a></li>
  <li style="float:right;"><a style="text-decoration:none"class="active" href="#about">Logout</a></li>
</ul>

<table>
<tr>
<th>STUDENT ID</th><th>FIRST NAME</th><th>MIDDLE NAME</th><th>LAST NAME</th><th>GENDER</th><th>ADDRESS</th><th>SCORE (%)</th>
</TR>
<?php
include 'database_config3.php';

$sql = "SELECT STUDENTID, FIRSTNAME, MIDDLENAME, LASTNAME, GENDER, ADDRESS, SCORE FROM STUDENTS";
   mysql_select_db('academydb');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

      echo "<tr><td>".$row['STUDENTID']."</td><td>".$row['FIRSTNAME']."</td><td>".$row['MIDDLENAME']."</td><td>".$row['LASTNAME']."</td><td>".$row['GENDER']."</td><td>".$row['ADDRESS']."</td><td>".$row['SCORE'];

   }
   
   
   mysql_close($conn);
?>
</table>


</form>
<hr>
</body>

  
  </div>
<center>
Student Information System - (SIS) - &copy MD Shahrouq
</center>

</html>

