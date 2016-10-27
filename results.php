<!DOCTYPE html>
<html>
<title>SIS | Results</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="Styles/w3.css">
<link rel="stylesheet" href="Styles/w3-theme-teal.css">
<link rel="stylesheet" href="Styles/font-awesome.min.css">
<link rel="stylesheet" href="Styles/bootstrap.min.css" >
<link rel="icon" href="Images/icon.png">
<script src="JavaScripts/jquery.min.js"></script>
<script src="bootstrap.min.js"></script>

<style>

* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 13px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 3px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}

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


table, td, th {
    border: 1px solid #ddd;
    text-align: left;
}

table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 2px;
}

th {
text-align:center;

}

td {
text-align:center;
font-size:16px;
}


</style>
<body>
<center>

<h2>Student Information System</h2>
   <img src="Images/logo.jpg" width="50" >
</center>

  <div class="imgcontainer">
  </div>

<ul>
  <li><a style="text-decoration:none" href="student_information_.php">Record Results</a></li>
  <li><a style="text-decoration:none" href="results.php">View Results</a></li>
  <li><a style="text-decoration:none" href="formatdb.php">Erase Database</a></li>
  <li><a style="text-decoration:none" href="newstudent.php">Add Student</a></li>
  <li style="float:right;"><a style="text-decoration:none"class="active" href="logout.php">Logout</a></li>
</ul>



<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for student.." title="Type in a name">

<table width="100%" border="2" id="myTable">
<tr>
<th colspan="9" style="background-color:#00688B; color:white;">EXAMINATION RESULTS</th>
</tr>
<th>STUDENT NAME</th><th>COMPUTING MATHEMATICS</th><th>DESKTOP PUBLISHING</th><th>OFFICE AUTOMATION</th><th>COMMUNICATION SKILLS</th><th>PC HARDWARE AND SOFTWARE</th><th>STATUS</th><th>UPDATE</th><th>DELETE</th>
</tr>
<?php
include 'database_config3.php';

  $sql = "SELECT * FROM results";
   mysql_select_db('schooldb');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {

 echo "<tr><td>".$row['student']."</td><td>".$row['compmath']."</td><td>".$row['deskpub']."</td><td>".$row['office']."</td><td>".$row['commskills']."</td><td>".$row['pchardware']."</td><td>".$row['status'];
echo '</td><td><a class="btn btn-info" href="update.php?id='.$row['student'].'">Update</a>';
echo '</td><td><a class="btn btn-danger" href="delete.php?id='.$row['student'].'">Delete</a>';
   }
   
   
   mysql_close($conn);
?>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

  </div>
<center>
Student Information System - (SIS) - &copy MD Shahrouq
</center>

</html>

