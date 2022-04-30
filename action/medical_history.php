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
if($_SESSION['usertype'] == "receptionist")
{    
    echo "<script>alert('access denied')</script>";
    echo "<script>window.location = '../action/reception.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../asssets/css/medical_history.css">
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
            <li ><a href="../action/doctor.php" >Home</a></li>
            <!-- <li><a href="#news">News</a></li> -->
            <li class=dropdown>
                <a href="javascript:void(0)" class="dropbtn" id="active">Patients</a>
                <div class="dropdown-content">
                    <a href="../action/medical_history.php" id="active">Medical history</a>
                    <!-- <a href="#">Link 3</a> -->
                </div>
            </li>
            <li ><a href="">Prescriptions</a></li>
        </ul>
        <div class="hms-banner">
            <h1 class="hms-heading">
                Medical history
            </h1>
        </div>
        <div id="body">
            <div class="left">
                <div class="staff-top">
                    <div class=scroll>
                        <table id="patient">
                            <tr style="color:#bd1616">
                                <td>Patient name</td>
                                <td>Record</td>
                                <td>Date</td>
                                
                            </tr>
                            <tr>
                                <td>data</td>
                                <td>data</td>
                                <td>data</td>
                                
                            </tr>
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
    </div>
    <?php
    include "../action/footer.php";
    ?>
</body>
</html>