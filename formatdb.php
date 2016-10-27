<?php
include 'database_config.php';

$sql = "DELETE FROM results";

if ($conn->query($sql) === TRUE) {
echo "<h1></h1>";
header("location:student_information_.php");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>