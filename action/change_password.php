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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../asssets/css/change_password.css">
    <script src="../asssets/js/register.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chnage password</title>
</head>
<body>
    <div class="container">
        <?php
        include "../action/top.php";
        ?>
        <ul class="ulist">
            <li ><a href="../action/reception.php" id="active">Home</a></li>
            <!-- <li><a href="#news">News</a></li> -->
            <li class=dropdown>
                <a class="dropbtn">Patient</a>
                <div class="dropdown-content">
                    <a href="../action/patients.php">Patient details</a>
                    <a href="../action/assign_patients.php">Add to ward</a>
                    <!-- <a href="#">Link 3</a> -->
                </div>
            </li>
            <li class=dropdown>
                <a class="dropbtn">Invoices</a>
                <div class="dropdown-content">
                    <a href="../action/admission.php">Admission</a>
                    <a href="../action/discharge.php">Discharge</a>
                    <!-- <a href="#">Link 3</a> -->
                </div>
            </li>
        </ul>
        <div class="hms-banner">
            <h1 class="hms-heading">CHANGE PASSWORD</h1>
        </div>
        <div class="container">
            <div class="left"></div>
            <div class="middle">
                <form method="POST" action="../src/update_password.php">
                    <table>
                        <!-- <tr>
                            <td class="label">Insert password:</td>
                            <td>
                                <input type="password" name="password" class="inputs" placeholder="insert password" required>
                            </td>
                        </tr> -->
                        <tr>
                            <td class="label">Insert new password:</td>
                            <td>
                                <input type="password" name="newpassword" class="inputs" id="password" placeholder="insert new password" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">Confrim new password:</td>
                            <td>
                                <input type="password" name="confirmpassword" class="inputs" id="confirm_password" placeholder="insert new password again" required>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: right;"><input type="submit" value="submit" class="submit" onclick=" return validate()"></td>
                            <td><input type="reset" value="reset" class="submit"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <div class="right"></div>
        </div>
    </div>
</body>
<?php
include "../action/footer.php";
?>
</html>