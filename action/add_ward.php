<?php
session_start();
if(!isset($_SESSION['useremail']))
{
   echo "<script>window.location = './login.php'</script>";
}
if($_SESSION['usertype'] == "doctor")
{    
    echo "<script>alert('access denied')</script>";
    echo "<script>window.location = '../action/doctor.php'</script>";
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
    <link rel="stylesheet" href="../asssets/css/add_ward.css">
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
            <li ><a href="../action/admin.php">Home</a></li>
            <!-- <li><a href="#news">News</a></li> -->
            <li class=dropdown>
                <a href="javascript:void(0)" class="dropbtn" id="active">Add</a>
                <div class="dropdown-content">
                    <a href="../action/add_ward.php" id="active">Add ward</a>
                    <a href="../action/add_theatre.php">Add theatres</a>
                    <a href="../action/add_staff.php">Add staff</a>
                </div>
            </li>
        </ul>
        <div class="hms-banner">
            <h1 class="hms-heading">
                Add ward
            </h1>
        </div>
        <div class="left-form">
            <form name="ward" method="POST" action="../src/add_ward.php" autocomplete="off">
                <table class="update" style="width: 100%;">
                    <tr>
                        <td class="label">Ward Id:</td>
                        <td colspan="3">
                            <input type="text" name="id" class="inputs" placeholder="insert ward id" required> 
                        </td>
                        </tr>
                    <tr>
                        <td class="label">Ward name:</td>
                        <td colspan="3">
                            <input type="text" name="name" class="inputs" placeholder="insert ward name" required> 
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Ward building:</td>
                        <td colspan="3">
                            <input type="text" name="building" class="inputs" placeholder="insert ward building" required> 
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Ward floor:</td>
                        <td colspan="3">
                            <input type="text" name="floor" class="inputs" placeholder="insert ward floor" required> 
                        </td>
                    </tr>
                    <tr>
                        <td style="width: 0%; text-align:center">
                            
                        </td>
                        <td style="width: 50%; text-align:center">
                            <input type="submit" name="submit" value="insert" class="submit">
                        </td>
                        <td style="width: 50%; text-align:center">
                            <input type="reset" name="submit" value="reset" class="submit">
                        </td>
                        <td style="width: 0%; text-align:center">     

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
                        $sql = "SELECT *FROM  `ward`";
                        $result = $connection->query($sql);
                    ?>
                    <table class="data-table">
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
            </div>
        </div>
    </div>
    <?php
    include "../action/footer.php";
    ?>
</body>
</html>