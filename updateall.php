<?php
if(isset($_POST['submit'])) {
include 'database_config.php';

$sid = $_POST['studentid'];
$examtitle = $_POST['title'];
$studentname = $_POST['studentname'];
$examno = $_POST['examnumber'];
$cm = $_POST['cm'];
$dp = $_POST['dp'];
$cs = $_POST['cs'];
$oa = $_POST['oa'];
$ph = $_POST['ph'];
$st = $_POST['status'];


$sql = "UPDATE results SET examno='$examno', compmath='$cm', deskpub='$dp', office ='$oa', commskills='$cs', pchardware='$ph', examtitle='$examtitle', student='$studentname', status='$st' WHERE id = '$sid'";

if ($conn->query($sql) === TRUE) {
header("location:results.php");

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>
