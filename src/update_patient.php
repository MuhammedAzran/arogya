<?php
include "./dbconnection.php";//database connection

$email = $_POST["email"];//taking data from the form
$name = $_POST["fname"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$contact = $_POST["contact"];
$address = $_POST["address"];

$sql = "UPDATE patients SET pname='$name', pdob='$dob', pgender='$gender', pcontact='$contact', paddress='$address'  
where pemail ='$email'";//SQL update query

if ($conn->query($sql)===TRUE)
{
    // echo "New record saved successfully";
    echo "<script>window.location = '../action/patients.php'; </script>";//destination
}
else
{
    echo "Error".$sql."<br>".$conn->error;//error code
}
$conn->close();//connection close
?>

    
     
    
