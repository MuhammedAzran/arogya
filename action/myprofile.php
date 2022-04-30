<!DOCTYPE html>
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
?>
<html lang="en">
<head>
    <link rel="stylesheet" href="../asssets/css/myprofile.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>your profile</title>
</head>

<body>
    <div class="container">
        <div class="top">
            <?php
            include "../action/top.php";
            ?>
            
        </div>
        <div class="hms-banner">
            <h1 class="hms-heading">YOUR PROFILE</h1>
        </div>
        <div id="content">
            <div class="left">
            </div>
            <div class="middle">
                <?php
                $connection = new mysqli('localhost','root','','arogya');
                $sql ="SELECT *FROM  `staff` where semail='".$_SESSION["useremail"]."' "; // sql query for che
                $result = $connection->query($sql);
                while ($row = $result->fetch_assoc())
                    {
                ?>
                <table>
                    <tr>
                        <td style="text-align: left; padding-left: 40px; color:red">Name:</td>
                        <td>
                            <?php echo $row["sname"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 40px; color:red;">Date of birth:</td>
                        <td>
                            <?php echo $row["sdob"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 40px; color:red">Gender:</td>
                        <td>
                            <?php echo $row["sgender"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 40px; color:red">Contact:</td>
                        <td>
                            <?php echo $row["scontact"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 40px; color:red">Adress:</td>
                        <td>
                            <?php echo $row["saddress"]; ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: left; padding-left: 40px; color:red">Email:</td>
                        <td>
                            <?php echo $row["semail"]; ?>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </table>
                <div style="padding: 30px; margin-left:15px;">
                    <a href="../action/change_password.php" id="change">change password</a>
                </div>
            </div>
            <div class="right">

            </div>
        </div>
    </div>
</body>
<?php
include "../action/footer.php";
?>
</html>