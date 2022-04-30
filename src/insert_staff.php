<?php
include "./dbconnection.php";


$name = $_POST["name"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$contact = $_POST["contact"];
$address = $_POST["address"];
$email = $_POST["email"];
$type= $_POST["type"];
$password = "111";


$sql1 = "INSERT INTO staff ( sname, sdob, sgender, scontact, saddress, semail) VALUES 
('".$name."', '".$dob."', '".$gender."', '".$contact."', '".$address."','".$email."')";

$sql2 = "INSERT INTO login (lemail, lpassword, ltype) VALUES 
('".$email."', '".$password."', '".$type."')";

if ($conn->query($sql1)==TRUE && $conn->query($sql2)==TRUE)
{
    // echo "New record created successfully";
    echo "<script>window.location = '../action/add_staff.php'; </script>";
    
}
else
{
    echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
?>