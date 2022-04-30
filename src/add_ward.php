<?php
include "./dbconnection.php";

$id = $_POST["id"];
$name = $_POST["name"];
$building = $_POST["building"];
$floor = $_POST["floor"];

$sql = "INSERT INTO ward (wid, wname, wbuilding, wfloor) VALUES ('".$id."', '".$name."', '".$building."', '".$floor."')";

if ($conn->query($sql)==TRUE)
{
    // echo "New record created successfully";
    echo "<script>window.location = '../action/add_ward.php'; </script>";
    
}
else
{
    echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
?>