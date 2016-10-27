<!DOCTYPE html>
<html>
<title>SIS | Admin Login</title>
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
</style>
<body>
<center>
<h2>Student Information System</h2>

</center>

<form action="admin_login.php" method="POST">
  <div class="imgcontainer">
    <img src="Images/logo.jpg" width="100" >
  </div>

  <div class="container">

<?php
error_reporting(E_ALL ^ E_DEPRECATED);
if(isset($_POST['submit'])) {

include 'database_config2.php';
$myusername = $_POST['username'];
$mypassword = $_POST['password'];



	
$query = "SELECT * FROM adminstrator WHERE USERNAME='$myusername' and PASSWORD='$mypassword'";
$result = mysql_query($query);
$count = mysql_num_rows($result);
mysql_close();
	
	
if($count==1){
$seconds = 5 + time();
setcookie(loggedin, date("F jS - g:i a"), $seconds);
session_start();
$_SESSION['username'] = $myusername;
$_SESSION['password'] = $mypassword;
header("location:student_information_.php");
}else{
 print '
<div class="warning div2">
  <p><strong> Error !</strong> Account not found in Database</p>
</div>
';

}
}

?>
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="submit" class="btn btn-info">Log me in</button>

</form>

</body>
<form action="index.php">
<button type="submit" class="btn btn-info">Student Login</button>
</form>
  
  </div>
<center>
Student Information System - (SIS) -&copy MD Shahrouq
</center>

</html>

