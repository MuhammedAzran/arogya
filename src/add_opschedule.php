<?php
include "./dbconnection.php";

$oid = $_POST["oid"];
$sid = $_POST["sid"];
$date = $_POST["date"];
$time = $_POST["time"];

$sql = "INSERT INTO theatreschedule (otid, sid, osdate, ostime) VALUES ('".$oid."', '".$sid."', '".$date."', '".$time."')";

if ($conn->query($sql)==TRUE)
{
    // echo "New record created successfully";
    echo "<script>window.location = '../action/assign_operations.php'; </script>";
    
}
else
{
    echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
?>