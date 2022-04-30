<?php
include "./dbconnection.php";//database connection

$email = $_POST["email"];//taking data from the form
$name = $_POST["name"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$contact = $_POST["contact"];
$address = $_POST["address"];

$sql = "INSERT INTO patients (pemail, pname, pdob, pgender, pcontact, paddress) 
VALUES ('".$email."', '".$name."', '".$dob."', '".$gender."', '".$contact."', '".$address."')";//sql insert query

if ($conn->query($sql)==TRUE)//checking sql connection
{
    // echo "New record created successfully";
    echo "<script>window.location = '../action/register.php'; </script>";//location
    
}
else
{
    echo "Error".$sql."<br>".$conn->error;
}
$conn->close();//connection close
?>