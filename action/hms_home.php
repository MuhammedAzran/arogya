<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../asssets/css/first.css">
    <link rel="stylesheet" href="../asssets/css/hms_home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="../asssets/js/hms_home.js"></script>
    <script src="../asssets/js/first.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AHMS</title>
</head>
<body>
    <div id="top">
	    <a name="topmost">
            <div id="logo">
                <a href="http://localhost/xampp/Arogya/first.php"><img id="arogya" src="../asssets/images/Arogya.png" alt="Arogya_logo"></a>
            </div>
            <div id="middle">
                
            </div>
            <div id="top-right">
                <a class="login" href="http://localhost/xampp/Arogya/action/staff_login.php" target="_blank">Login</a>
            </div>
    </div>
    <ul class="ulist">
        <li id="active"><a href="#home">Home</a></li>
        <!-- <li><a href="#news">News</a></li> -->
        <li class=dropdown>
            <a href="javascript:void(0)" class="dropbtn">Patient</a>
            <div class="dropdown-content">
                <a href="../action/patients.php" target="_blank">Patient details</a>
                <a href="#">Patient medical records</a>
                <!-- <a href="#">Link 3</a> -->
            </div>
        </li>
        <li class=dropdown>
            <a href="javascript:void(0)" class="dropbtn">Staff</a>
            <div class="dropdown-content">
                <a href="#">Staff details</a>
                <a href="#">Staff schedules</a>
                <!-- <a href="#">Link 3</a> -->
            </div>
        </li>
        <li class=dropdown>
            <a href="javascript:void(0)" class="dropbtn">Invoices</a>
            <div class="dropdown-content">
                <a href="#">Admission</a>
                <a href="#">Discharge</a>
                <!-- <a href="#">Link 3</a> -->
            </div>
        </li>
    </ul>
    <div class="hms-banner">
        <h1 class="hms-heading">welcome to Arogya Healthcare Management System</h1>
    </div>
    <div class="container">
        <div class="left">
            <div class="staff-top">
                <h2 class="schedule">Staff schedule</h2>
                <div class=scroll>
                    <table>
                        <tr style="color:#bd1616">
                            <td>Schedule Id</td>
                            <td>Schedule duty</td>
                            <td>Schedule date</td>
                            <td>Schedule time</td>
                            <td>Staff name</td>
                        </tr>
                        <tr>
                            <td>data</td>
                            <td>data</td>
                            <td>data</td>
                            <td>data</td>
                            <td>data</td>
                        </tr>
                    </table>
                </div>
                <a href=""><b>Update</b></a>
            </div>
            <div class="staff-top">
            <h2 class="schedule">Operating theatre schedule</h2>
                <div class=scroll>
                    <table>
                        <tr style="color:#bd1616">
                            <td>Theatre Id</td>
                            <td>Theatre name</td>
                            <td>Theatre date</td>
                            <td>Theatre time</td>
                            <td>Staff name</td>
                        </tr>
                        <tr>
                            <td>data</td>
                            <td>data</td>
                            <td>data</td>
                            <td>data</td>
                            <td>data</td>
                        </tr>
                    
                    </table>
                </div>
                <a href=""><b>Update</b></a>
            </div>
        </div>
        <div class="right">
        <!-- <div class="right-top">
                <img id="doctors" src="../asssets/images/hire.jpg" alt="image2">
                <h2 id="healthcare-caption"><u>Now hiring...</u></h2>
                <p class="healthcare-para">
                    Contact Arogya Healthcare to find the vacancies.<br>
                    Contact: 0772693123 (Kasun)<br>
                    Contact: 0728969781 (Peter)<br>
                </p>
            </div> -->
            <?php
            include "../action/rightad.php";
            ?>
        </div>
    </div>
</body>
</html>