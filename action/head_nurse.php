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
if($_SESSION['usertype'] == "receptionist")
{    
    echo "<script>alert('access denied')</script>";
    echo "<script>window.location = '../action/reception.php'</script>";
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
    <link rel="stylesheet" href="../asssets/css/head_nurse.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AHMS</title>
</head>
<body>
    <div class="container">
        <?php
        include "../action/top.php";
        ?>
        <ul class="ulist">
            <li ><a href="../action/head_nurse.php" id="active">Home</a></li>
            <!-- <li><a href="#news">News</a></li> -->
            <li class=dropdown>
                <a href="javascript:void(0)" class="dropbtn">Operations</a>
                <div class="dropdown-content">
                    <a href="../action/assign_operations.php">Assign operations</a>
                    <!-- <a href="#">Link 3</a> -->
                </div>
            </li>
        </ul>
        <div class="hms-banner">
            <h1 class="hms-heading">welcome to Arogya Healthcare Management System</h1>
        </div>
        <div id="body">
            <div class="left">
                <div class="staff-top">
                    <h2 class="schedule">Operation schedule</h2>
                    <div class=scroll>
                        <?php
                        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                        $connection = new mysqli('localhost','root','','arogya');
                        $sql = "SELECT staff.sname, theatreschedule.otid, theatreschedule.osdate, theatreschedule.ostime FROM `theatreschedule` INNER JOIN `staff` ON staff.sid = theatreschedule.sid";
                        $result = $connection->query($sql);
                        ?>
                        <table>
                            <tr style="color:#bd1616">
                                <td>Staff name</td>
                                <td>Theatre Id</td>
                                <td>Date</td>
                                <td>Time</td>
                                
                            </tr>
                            <?php
                            while ($row = $result->fetch_assoc())
                            {
                                echo "<tr><td>".$row['sname']."</td><td>".$row['otid']."</td><td>".$row['osdate']."</td><td>".$row['ostime']."</td></tr>";
                            }
                            ?>
                        </table>
                    </div>
                    <a href="../action/assign_operations.php"><b>Assign operations</b></a>
                </div>
                <div class="staff-top">
                    <h2 class="schedule">Operation theatres</h2>
                    <div class=scroll>
                    <?php
                        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
                        $connection = new mysqli('localhost','root','','arogya');
                        $sql = "SELECT *FROM `operatingtheatre`";
                        $result = $connection->query($sql);
                        ?>
                        <table id="theatre">
                            <tr style="color:#bd1616">
                                <td>Theatre Id</td>
                                <td>Name</td>
                                <td>Floor</td> 
                            </tr>
                            <?php
                            while ($row = $result->fetch_assoc())
                            {
                                echo "<tr><td>".$row['otid']."</td><td>".$row['otname']."</td><td>".$row['otfloor']."</td></tr>";
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
            <div class="right">
                <?php
                include "../action/hiread2.php";
                ?>
            </div>
        </div>
    </div>
    <?php
    include "../action/footer.php";
    ?>
</body>
</html>