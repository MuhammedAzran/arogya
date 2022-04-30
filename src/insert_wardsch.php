<?php
include "./dbconnection.php";

$email = $_POST["email"];
$wid = $_POST["wid"];
$date = $_POST["date"];
$time = $_POST["time"];

$sql = "INSERT INTO wardschedule (wid, pemail, wsdate, wstime) VALUES ('".$wid."', '".$email."', '".$date."', '".$time."')";

if ($conn->query($sql)==TRUE)
{
    // echo "New record created successfully";
    echo "<script>window.location = '../action/assign_patients.php'; </script>";
    
}
else
{
    echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
?>