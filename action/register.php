<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../asssets/css/register.css">
    <link rel="shortcut icon" type="image/x-icon" href="../favicon.ico" />
    <script src="../asssets/js/register_message.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <div class="container">
        <!-- <div id="top">
            <div class="top-side"></div>
            <div id="top-mid">
                <a href="http://localhost/xampp/Arogya/first.php"><img id="arogya" src="../asssets/images/Arogya.png" alt="Arogya_logo"></a>
            </div>
            <div class="top-side"></div>
        </div> -->
        <div id="top">
            <a name="topmost">
            <div id="logo">
                <a href="http://localhost/xampp/Arogya/index.php"><img id="arogya" src="../asssets/images/Arogya.png" alt="Arogya_logo"></a>
            </div>
            <div id="middle">
                <a href="https://www.google.com/" class="top-links" target="_blank"><b>welcome</b></a>
                <a href="https://www.google.com/" class="top-links" target="_blank"><b>visit</b></a>
                <a href="https://www.google.com/" class="top-links" target="_blank"><b>contact</b></a>
            </div>
            <div id="top-right">
                <div id="btn1">
                    <a class="login" href="../action/register.php">Register</a>
                </div>
                <div id="btn2">
                    <a class="login" href="../action/login.php">Login</a>
                </div>            
            </div>
        </div>
        <ul class="ulist">
            <li><a href="../index.php">Home</a></li>
            <li class=dropdown>
                <a href="javascript:void(0)" class="dropbtn" id="active">Services</a>
                <div class="dropdown-content">
                    <a href="../action/register.php" id="active">Register</a>
                    <a href="../action/appointment.php">Add apointment</a>
                </div>
            </li>
        </ul>

        <div id="content">
            <div class="side"></div>
            <div id="mid">
                <form class="form" action="../src/insert_patient.php" method="POST" autocomplete="off">
                    <table id="table" style="width: 100%;">
                        <caption id="caption"><b>CUSTOMER REGISTRATION</b> </caption>
                        <tr class="row">
                            <td class="label">Full name:</td>
                            <td><input name="name" type="text" placeholder="insert full name" class="inputs" id="name" required></td>
                        </tr>
                        <tr class="row">
                            <td class="label">Date of birth:</td>
                            <td><input name="dob" type="date" class="inputs" id="dob" required></td>
                        </tr>
                        <tr class="row">
                            <td class="label" required>Gender:</td>
                            <td style="font-family: poppins; float:left; font-size: 14px">
                                male:<input class="radios" type="radio" value="male" id="gender" name="gender" >
                                <br>
                                female:<input class="radios" type="radio" value="female" id="gender" name="gender">
                            </td>
                        </tr>
                        <tr class="row">
                            <td class="label">Contact:</td>
                            <td><input name="contact" type="text" placeholder="insert contact" id="contact" class="inputs" required></td>
                        </tr>
                        <tr class="row">
                            <td class="label">Address:</td>
                            <td><input name="address" type="text" placeholder="insert addess" id="address" class="inputs" required></td>
                        </tr>
                        <tr class="row">
                            <td class="label">Email:</td>
                            <td><input name="email" type="email" placeholder="insert email" id="email" class="inputs" required></td>
                        </tr>
                        <tr class="row" style="text-align: center;">
                            <td colspan="2">
                                <input type="submit" name="submit" value="submit" id="submit"  onclick= "return message()">
                            </td>
                            <td>
                            </td>
                        </tr>
                    </table>
                </form>
                <div id="data-display" style="font-family: poppins;">
                    <?php
                    
                    ?>
                </div>
            </div>
            <div class="side"></div>
        </div>
    </div>
    <?php
    include "../action/footer.php";
    ?>
    <script>
        var inputBox = document.getElementById("name");
        var invalid = ["1","2","3","4","5","6","7","8","9","0","/","*","-","+",".","#","!","$"];
        inputBox.addEventListener("keydown",function(e)
        {
            if(invalid.includes(e.key))
            {
                e.preventDefault();
            }
        });
    </script>
</body>
</html>