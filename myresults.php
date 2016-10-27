<!DOCTYPE html>
<html>
<title>SIS | Student Results</title>
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

table, td, th {
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 15px;
}

th {
text-align:center;

}

td {
color:green;
text-align:center;
font-size:16px;
}

p {
background-color:#00B2EE;
color:white;
border-radius:3px;
}

</style>
<body>
<center>

<h2>Student Information System</h2>

</center>

  <div class="imgcontainer">
    <img src="Images/logo.jpg" width="50" >
  </div>


  <div class="container">
<?php
include 'database_config3.php';
session_start();
$student=$_SESSION['username'];


  $sql = "SELECT * FROM results where examno = '$student'";
   mysql_select_db('schooldb');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

      echo "<b>Examination No: {$row['examno']}</b><br> ".
           "<b>Examination: {$row['examtitle']}</b><br> ".
         "<b>Student Name: {$row['student']} </b><br> ";
        
   }
   
   
   mysql_close($conn);
?>

<table width="100%" border="2">
<tr>
<th colspan="5" style="background-color:#00688B; color:white;">EXAMINATION RESULTS</th>
</tr>
<th>COMPUTING MATHEMATICS</th><th>DESKTOP PUBLISHING</th><th>OFFICE AUTOMATION</th><th>COMMUNICATION SKILLS</th><th>PC HARDWARE AND SOFTWARE</th>
</tr>


<?php
include 'database_config3.php';

  $sql = "SELECT * FROM results where examno = '$student'";
   mysql_select_db('schooldb');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

 echo "<tr><td>".$row['compmath']."</td><td>".$row['deskpub']."</td><td>".$row['office']."</td><td>".$row['commskills']."</td><td>".$row['pchardware'];
   
   }
   
   
   mysql_close($conn);
?>
</table><br>
<b>COMMENT</b>
<?php
include 'database_config3.php';

  $sql = "SELECT * FROM results where examno = '$student'";
   mysql_select_db('schooldb');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

 echo "<p>".$row['status'];
   
   }
   
   
   mysql_close($conn);
?>

<form action="logout.php">
<button type="submit" class="btn btn-info">Log me out</button>
</form>

  </div>
<center>
Student Information System - (SIS) - &copy MD Shahrouq
</center>

</html>

