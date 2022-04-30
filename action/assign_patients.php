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
    <link rel="stylesheet" href="../asssets/css/assign_patients.css">
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
            <li ><a href="../action/reception.php">Home</a></li>
            <!-- <li><a href="#news">News</a></li> -->
            <li class=dropdown>
                <a href="javascript:void(0)" id="active" class="dropbtn">Patient</a>
                <div class="dropdown-content">
                    <a href="../action/patients.php">Patient details</a>
                    <a href="../action/assign_patients.php"  id="active">Add to ward</a>
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
                Add patient to ward / ward scheduling
            </h1>
        </div>
        <div id="body">
            <div class="left-form">
                <form name="patient" method="POST" action="../src/insert_wardsch.php">
                    <table class="update" style="width: 100%;">
                        <tr>
                            <td class="label">Patient email:</td>
                            <td colspan="3">
                                <input type="text" name="email" class="inputs" placeholder="insert patient id" required> 
                            </td>
                        </tr>
                        <tr>
                            <td class="label">Ward Id:</td>
                            <td colspan="3">
                                <input type="text" name="wid" class="inputs" placeholder="insert ward id" required> 
                            </td>
                        </tr>
                        <tr>
                            <td class="label">Date:</td>
                            <td colspan="3">
                                <input type="date" name="date" value="birthday" class="inputs" placeholder="insert date" required> 
                            </td>
                        </tr>
                        <tr>
                            <td class="label">Time:</td>
                            <td colspan="3">
                                <input type="time" name="time" class="inputs" placeholder="insert time" required> 
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
                        $sql = "SELECT *FROM  `wardschedule`";
                        $result = $connection->query($sql);
                        ?>
                        <table class="data-table">
                            <tr style="color:#bd1616">
                                <td>Patient email</td>
                                <td>Ward Id</td>
                                <td>Date</td>
                                <td>Time</td>
                            </tr>
                            <?php
                            while ($row = $result->fetch_assoc())
                            {
                                echo "<tr><td>".$row['pemail']."</td><td>".$row['wid']."</td><td>".$row['wsdate']."</td><td>".$row['wstime']."</td></tr>";
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