<?php
include "./dbconnection.php";

$id = $_POST["id"];
$name = $_POST["name"];
$floor = $_POST["floor"];

$sql = "INSERT INTO operatingtheatre (otid, otname, otfloor) VALUES ('".$id."', '".$name."', '".$floor."')";

if ($conn->query($sql)==TRUE)
{
    // echo "New record created successfully";
    echo "<script>window.location = '../action/add_theatre.php'; </script>";
    
}
else
{
    echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
?>