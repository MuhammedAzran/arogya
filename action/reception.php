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
    <link rel="stylesheet" href="../asssets/css/reception.css">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AHMS</title>
</head>
<body>
    <div class="container">
        <div class="top">
            <?php
            include "../action/top.php";
            ?>
            <ul class="ulist">
                <li ><a href="../action/reception.php" id="active">Home</a></li>
                <!-- <li><a href="#news">News</a></li> -->
                <li class=dropdown>
                    <!-- <a href="javascript:void(0)" class="dropbtn">Patient</a> -->
                    <a  class="dropbtn">Patient</a>
                    <div class="dropdown-content">
                        <a href="../action/patients.php">Patient details</a>
                        <a href="../action/assign_patients.php">Add to ward</a>
                        <!-- <a href="#">Link 3</a> -->
                    </div>
                </li>
                <li class=dropdown>
                    <!-- <a href="javascript:void(0)" class="dropbtn">Invoices</a> -->
                    <a class="dropbtn">Invoices</a>
                    <div class="dropdown-content">
                        <a href="../action/admission.php">Admission</a>
                        <a href="../action/discharge.php">Discharge</a>
                        <!-- <a href="#">Link 3</a> -->
                    </div>
                </li>
            </ul>
        </div>
        <div class="hms-banner">
            <h1 class="hms-heading">welcome to Arogya Healthcare Management System</h1>
        </div>
        <div id="body">
            <div class="left">
                <div class="staff-top">
                    <h2 class="schedule">Available wards</h2>
                    <div class=scroll>
                        <?php
                        $connection = new mysqli('localhost','root','','arogya');
                        $sql = "SELECT *FROM  `ward`";
                        $result = $connection->query($sql);
                        ?>
                        <table>
                            <tr style="color:#bd1616">
                                <td>Ward Id</td>
                                <td>Ward name</td>
                                <td>Ward building</td>
                                <td>Ward floor</td>
                            </tr>
                            <?php
                            while ($row = $result->fetch_assoc())
                            {
                                echo "<tr><td>".$row['wid']."</td><td>".$row['wname']."</td><td>".$row['wbuilding']."</td><td>".$row['wfloor']."</td></tr>";
                            }
                            ?>
                            <!-- <tr>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                
                            </tr> -->
                        </table>
                    </div>
                    <a href="../action/assign_patients.php"><b>Assign patients</b></a>
                </div>
                <div class="staff-top">
                    <h2 class="schedule">Ward schedule</h2>
                    <div class=scroll>
                        <?php
                        $sql = "SELECT ward.wid, ward.wname, ward.wbuilding, wardschedule.wsdate, wardschedule.wstime 
                        FROM `ward` INNER JOIN `wardschedule` ON ward.wid = wardschedule.wid";
                        $result = $connection->query($sql);
                        ?>
                        <table>
                            <tr style="color:#bd1616">
                                <td>Ward Id</td>
                                <td>Ward name</td>
                                <td>Ward building</td>
                                <td>Date</td>
                                <td>Time</td>
                            </tr>
                            <?php
                            while ($row = $result->fetch_assoc())
                            {
                                echo "<tr><td>".$row['wid']."</td>
                                <td>".$row['wname']."</td>
                                <td>".$row['wbuilding']."</td>
                                <td>".$row['wsdate']."</td>
                                <td>".$row['wstime']."</td></tr>";
                            }
                            ?>

                        </table>
                    </div>
                </div>
            </div>
            <div class="right">
                <?php
                include "../action/hiread.php";
                ?>
            </div>
        </div>
        <div class="footer">
            <?php
            include "../action/footer.php";
            ?>
        </div>
    </div>
</body>
</html>