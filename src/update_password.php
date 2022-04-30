<?php
include "./dbconnection.php";//database connection

session_start();//session start
if(!isset($_SESSION['useremail']))
{
   echo "<script>window.location = './login.php'</script>";
}

$password = $_POST["newpassword"];//taking data from the form

$sql ="UPDATE login SET  lpassword='$password' 
where lemail='".$_SESSION["useremail"]."' ";//update SQL query

if ($conn->query($sql)=== TRUE )//checking connection
{
    echo "New record updated successfully";
    echo "<script >window.location = '../action/myprofile.php'</script>";//destination page
}
else
{
    
    echo "Error".$sql."<br>".$conn->error;//throw error
}
$conn->close();//connection close
?>