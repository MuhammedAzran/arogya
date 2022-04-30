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
    <link rel="stylesheet" href="../asssets/css/add_theatre.css">
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
                    <a href="../action/add_ward.php" >Add ward</a>
                    <a href="../action/add_theatre.php" id="active">Add theatres</a>
                    <a href="../action/add_staff.php">Add staff</a>
                </div>
            </li>
        </ul>
        <div class="hms-banner">
            <h1 class="hms-heading">
                Add operating theatre
            </h1>
        </div>
        <div class="left-form">
            <form name="theatre" method="POST" action="../src/insert_theatre.php" autocomplete="off">
                <table class="update" style="width: 100%;">
                    <tr>
                        <td class="label">Theatre Id:</td>
                        <td colspan="3">
                            <input type="text" name="id" class="inputs" placeholder="insert theatre id" required> 
                        </td>
                        </tr>
                    <tr>
                        <td class="label">Theatre name:</td>
                        <td colspan="3">
                            <input type="text" name="name" class="inputs" placeholder="insert theatre name" required> 
                        </td>
                    </tr>
                    <tr>
                        <td class="label">floor:</td>
                        <td colspan="3">
                            <input type="text" name="floor" class="inputs" placeholder="insert theatre floor" required> 
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
                        $sql = "SELECT *FROM  `operatingtheatre`";
                        $result = $connection->query($sql);
                    ?>
                    <table class="data-table">
                        <tr style="color:#bd1616">
                            <td>Theatre Id</td>
                            <td>Theatre name</td>
                            <td>Theatre floor</td>

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
    </div>
    <?php
    include "../action/footer.php";
    ?>
</body>
</html>