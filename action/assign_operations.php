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
    <link rel="stylesheet" href="../asssets/css/assign_operations.css">
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
            <li ><a href="../action/head_nurse.php">Home</a></li>
            <!-- <li><a href="#news">News</a></li> -->
            <li class=dropdown>
                <a href="javascript:void(0)" class="dropbtn" id="active">Operations</a>
                <div class="dropdown-content">
                    <a href="../action/assign_operations.php" id="active">Assign operations</a>
                    <!-- <a href="#">Link 3</a> -->
                </div>
            </li>
        </ul>
        <div class="hms-banner">
            <h1 class="hms-heading">Assign patients / operation schedule</h1>
        </div>
        <div id="body">
            <div class="left-form">
                <form name="patient" method="POST" action="../src/add_opschedule.php">
                    <table class="update" style="width: 100%;">
                        <tr>
                            <td class="label">Theatre Id:</td>
                            <td colspan="3">
                                <input type="text" name="oid" class="inputs" placeholder="insert theatre id" required> 
                            </td>
                            </tr>
                        <tr>
                            <td class="label">Staff Id:</td>
                            <td colspan="3">
                                <input type="text" name="sid" class="inputs" placeholder="insert staff id" required> 
                            </td>
                        </tr>
                        <tr>
                            <td class="label">Date:</td>
                            <td colspan="3">
                                <input type="date" name="date" value="date" class="inputs" required> 
                            </td>
                        </tr>
                        <tr>
                            <td class="label">Time:</td>
                            <td colspan="3">
                                <input type="time" name="time" class="inputs" required> 
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 20%; text-align:center">
                                
                            </td>
                            <td style="width: 20%; text-align:center">
                                <input type="submit" name="submit" value="insert" class="submit">
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
                        $sql = "SELECT theatreschedule.otid, theatreschedule.sid, staff.sname, theatreschedule.osdate, theatreschedule.ostime FROM `theatreschedule` INNER JOIN `staff` ON theatreschedule.sid = staff.sid";
                        $result = $connection->query($sql);
                        ?>
                        <table class="data-table">
                            <tr style="color:#bd1616">
                                <td>Theatre Id</td>
                                <td>Staff Id</td>
                                <td>Staff Name</td>
                                <td>Date</td>
                                <td>Time</td>

                            </tr>
                            <?php
                            while ($row = $result->fetch_assoc())
                            {
                                echo "<tr><td>".$row['otid']."</td><td>".$row['sid']."</td><td>".$row['sname']."</td><td>".$row['osdate']."</td><td>".$row['ostime']."</td></tr>";
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include "../action/footer.php";
    ?>
    
</body>
</html>