<?php
include "./dbconnection.php";

$email = $_POST["email"];
$type = $_POST["type"];
$date = $_POST["date"];

$sql = "INSERT INTO appointment (pemail, aptype, apdate) VALUES ('".$email."', '".$type."', '".$date."')";

if ($conn->query($sql)==TRUE)
{
    // echo "New record created successfully";
    echo "<script>window.location = '../action/appointment.php'; </script>";
    
}
else
{
    echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
?>