<?php
session_start();// start session
include("dbconnection.php");// import db connection details

	$sql1 ="select * from  login where lemail='".$_REQUEST['username']."' 
	AND lpassword='".$_REQUEST['password']."' "; // sql query for che
  
	$r1 = $conn->query($sql1);
		
	while($row1 = $r1->fetch_assoc()){//while loop
	$_SESSION["useremail"]=$_REQUEST['username'];

		$type=$row1["ltype"];
		$_SESSION["usertype"]= $type;
		
		if ( $type =="admin")//checking admin
		{
			echo "<script >window.location = '../action/admin.php'</script>";
	
		}
		elseif($type == "receptionist")//checking receptionist
		{
			echo "<script >window.location = '../action/reception.php'</script>";
		}
		elseif($type == "head nurse")//checking head nurse
		{
			echo "<script >window.location = '../action/head_nurse.php'</script>";
		}
		elseif($type == "doctor")//checking doctor
		{
			echo "<script >window.location = '../action/doctor.php'</script>";
		}
	}
	echo "<script> alert ('Please Check your Username  or Password')</script>"	;//error message
echo "<script >window.location = '../action/login.php'</script>";//destination for invalid login
?>