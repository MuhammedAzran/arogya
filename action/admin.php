<?php
session_start();
if(!isset($_SESSION['useremail']))//isset to check email value
{
    echo "<script>alert('access denied')</script>";//alert box
    echo "<script>window.location = './login.php'</script>";//login page
}
if($_SESSION['usertype'] == "doctor")//checking user for access denail
{    
    echo "<script>alert('access denied')</script>";
    echo "<script>window.location = '../action/doctor.php'</script>";//doctor homepage
}
if($_SESSION['usertype'] == "head nurse")//checking user for access denail
{    
    echo "<script>alert('access denied')</script>";
    echo "<script>window.location = '../action/head_nurse.php'</script>";//head nurse home
}
if($_SESSION['usertype'] == "receptionist")//checking user for access denail
{    
    echo "<script>alert('access denied')</script>";
    echo "<script>window.location = '../action/reception.php'</script>";//reception home page
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../asssets/css/admin.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AHMS</title>
</head>
<body>
    <div class="container">
        <?php
        include "../action/top.php";//header part with content
        ?>
        <ul class="ulist">
            <li ><a href="./admin.php" id="active">Home</a></li>
            <!-- <li><a href="#news">News</a></li> -->
            <li class=dropdown>
                <a  class="dropbtn">Add</a>
                <div class="dropdown-content">
                    <a href="../action/add_ward.php">Add ward</a>
                    <a href="../action/add_theatre.php">Add theatres</a>
                    <a href="../action/add_staff.php">Add staff</a>
                </div>
            </li>
        </ul>
        <div class="hms-banner">
            <h1 class="hms-heading">welcome to Arogya Healthcare Management System</h1>
        </div>
        <div id="body">
            <div class="left">
                <div class="staff-top">
                    <h2 class="schedule">Wards</h2>
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
                        </table>
                    </div>
                    <a href="../action/add_ward.php"><b>Add wards</b></a>
                </div>
            </div>
            <div class="right">
                <?php
                include "../action/hiread3.php";
                ?>
            </div>
        </div>
    </div>
    <?php
    include "../action/footer.php";
    ?>
</body>
</html>