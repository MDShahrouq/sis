<?php
include 'database_config.php';
$id = $_GET['id'];


$sql = "DELETE FROM RESULTS WHERE STUDENT = '$id'";

if ($conn->query($sql) === TRUE) {
header("location:results.php");} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>