<?php
session_start();
if(!isset($_SESSION['useremail']))
{
   echo "<script>window.location = './login.php'</script>";
}
if($_SESSION['usertype'] == "admin")
{    
    echo "<script>alert('access denied')</script>";
    echo "<script>window.location = '../action/admin.php'</script>";
}
if($_SESSION['usertype'] == "head nurse")
{    
    echo "<script>alert('access denied')</script>";
    echo "<script>window.location = '../action/head_nurse.php'</script>";
}
if($_SESSION['usertype'] == "doctor")
{    
    echo "<script>alert('access denied')</script>";
    echo "<script>window.location = '../action/doctor.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../asssets/css/patients.css">
    <script src="../asssets/js/patient_JS.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AHMS</title>
</head>
<body>
    <?php
    include "../action/top.php";
    ?>
    <ul class="ulist">
        <li ><a href="../action/reception.php">Home</a></li>
        <!-- <li><a href="#news">News</a></li> -->
        <li class=dropdown>
            <a href="javascript:void(0)" id="active" class="dropbtn">Patient</a>
            <div class="dropdown-content">
                <a href="../action/patients.php" id="active">Patient details</a>
                <a href="../action/assign_patients.php">Add to ward</a>
                <!-- <a href="#">Link 3</a> -->
            </div>
        </li>
        <li class=dropdown>
            <a href="javascript:void(0)" class="dropbtn">Invoices</a>
            <div class="dropdown-content">
                <a href="../action/admission.php">Admission</a>
                <a href="../action/discharge.php">Discharge</a>
                <!-- <a href="#">Link 3</a> -->
            </div>
        </li>
    </ul>
    <div class="hms-banner">
        <h1 class="hms-heading">
            Patient details
        </h1>
    </div>
    <div class="container">
        <div class="left-form">
            <form name="patient" method="POST" action="../src/update_patient.php">
                <table class="update" style="width: 100%;">
                    <tr>
                        <td class="label">Patient email:</td>
                        <td colspan="3">
                            <input type="text" name="email" id="email" class="inputs" placeholder="insert email" required> 
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Full name:</td>
                        <td colspan="3">
                            <input type="text" name="fname" class="inputs" id="name" placeholder="insert full name" required> 
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Date of birth:</td>
                        <td colspan="3">
                            <input type="date" name="dob" value="birthday" id="dob" class="inputs" placeholder="insert DOB" > 
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Gender:</td>
                        <td style="font-family: 'Franklin Gothic'; float: left;">
                            male:<input class="radios" type="radio" value="male" id="gender" name="gender" >
                            <br>
                            female:<input class="radios" type="radio" value="female" id="gender" name="gender">
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Contact:</td>
                        <td colspan="3">
                            <input type="text" name="contact" class="inputs" id="contact" placeholder="insert contact" required> 
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Address:</td>
                        <td colspan="3">
                            <input type="text" name="address" class="inputs" id="address" placeholder="insert address" required> 
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 20%; text-align:center">
                            
                        </td>
                        <td style="width: 20%; text-align:center">
                            <input type="submit" name="submit" value="update" onclick="message()" class="submit">
                        </td>
                        <td style="width: 20%; text-align:center">
                            <input type="reset" name="submit" value="reset" class="submit">
                        </td>
                        <td style="width: 20%; text-align:center">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <div class="right-table">
            <div>
                <div class=scroll>
                    <?php
                        $connection = new mysqli('localhost','root','','arogya');
                        $sql = "SELECT *FROM  `patients`";
                        $result = $connection->query($sql);
                        ?>
                    <table class="data-table">
                        <tr style="color:#bd1616">
                            <td>Email</td>
                            <td>Full name</td>
                            <td>DOB</td>
                            <td>Gender</td>
                            <td>Contact</td>
                            <td>Address</td>
                        </tr>
                        <?php
                            while ($row = $result->fetch_assoc())
                            {
                                echo "<tr><td>".$row['pemail']."</td><td>".$row['pname']."</td><td>".$row['pdob']."</td><td>".$row['pgender']."</td><td>".$row['pcontact']."</td><td>".$row['paddress']."</td></tr>";
                            }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="footer">
        a design of Apex
	<p><a href=#topmost>back to top</p>
    </div> -->
    <?php
    include "../action/footer.php";
    ?>
</body>
</html>