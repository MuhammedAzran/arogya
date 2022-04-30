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
    <link rel="stylesheet" href="../asssets/css/add_staff.css">
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
            <li ><a href="../action/admin.php" id="home">Home</a></li>
            <!-- <li><a href="#news">News</a></li> -->
            <li class=dropdown>
                <a class="dropbtn" id="active">Add</a>
                <div class="dropdown-content">
                    <a href="../action/add_ward.php" >Add ward</a>
                    <a href="../action/add_theatre.php" >Add theatres</a>
                    <a href="../action/add_staff.php" id="active">Add staff</a>
                </div>
            </li>
        </ul>
        <div class="hms-banner">
            <h1 class="hms-heading">
                Add staff
            </h1>
        </div>
        <div class="left-form">
            <form name="patient" method="POST" action="../src/insert_staff.php" autocomplete="off">
                <table class="update" style="width: 100%;">
                    
                    <tr>
                        <td class="label">Name:</td>
                        <td colspan="3">
                            <input type="text" name="name" class="inputs" placeholder="insert staff name" required> 
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Date of birth:</td>
                        <td colspan="3">
                            <input type="date" name="dob" class="inputs" required> 
                        </td>
                    </tr>
                    <tr class="row">
                            <td class="label" required>Gender:</td>
                            <td style="font-family: poppins; float:left; font-size: 14px">
                                male:<input class="radios" type="radio" value="male" name="gender" >
                                <br>
                                female:<input class="radios" type="radio" value="female" name="gender">
                            </td>
                        </tr>
                    <tr>
                        <td class="label">Contact:</td>
                        <td colspan="3">
                            <input type="text" name="contact" class="inputs" placeholder="insert contact" required> 
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Address:</td>
                        <td colspan="3">
                            <input type="text" name="address" class="inputs" placeholder="insert address" required> 
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Email:</td>
                        <td colspan="3">
                            <input type="email" name="email" class="inputs" placeholder="insert email" required> 
                        </td>
                    </tr>
                    <tr>
                        <td class="label">Type:</td>
                        <td colspan="3">
                            <input type="text" name="type" class="inputs" placeholder="insert type" required> 
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
                        $sql = "SELECT *FROM  `staff`";
                        $result = $connection->query($sql);
                    ?>
                    <table class="data-table">
                        <tr style="color:#bd1616">
                            <td>Staff Id</td>
                            <td>Name</td>
                            <td>DOB</td>
                            <td>Gender</td>
                            <td>Contact</td>
                            <td>Address</td>
                            <td>Email</td>
                        </tr>
                        <?php
                            while ($row = $result->fetch_assoc())
                            {
                                echo "<tr><td>".$row['sid']."</td><td>".$row['sname']."</td><td>".$row['sdob']."</td><td>".$row['sgender']."</td><td>".$row['scontact']."</td><td>".$row['saddress']."</td><td>".$row['semail']."</td></tr>";
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