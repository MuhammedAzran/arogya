<?php
include "./dbconnection.php";

// $id = $_POST["id"];
$time = $_POST["time"];
$date = $_POST["date"];
$fee = $_POST["fee"];
$sid = $_POST["sid"];
$email = $_POST["email"];

$sql = "INSERT INTO discharge ( distime, disdate, disfee, sid, pemail) VALUES ('".$time."', '".$date."', '".$fee."', '".$sid."', '".$email."')";

if ($conn->query($sql)==TRUE)
{
    // echo "New record created successfully";
    echo "<script>window.location = '../action/discharge.php'; </script>";
    
}
else
{
    echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
?>