<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../asssets/css/appointment.css">
    <script src="../asssets/js/appointment_message.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
</head>
<body>
    <div class="container">
        <div id="top">
            <a name="topmost">
            <div id="logo">
                <a href=""><img id="arogya" src="../asssets/images/Arogya.png" alt="Arogya_logo"></a>
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
            <li ><a href="../index.php" id="no">Home</a></li>
            <li class=dropdown>
                <a  class="dropbtn" id="active">Services</a>
                <div class="dropdown-content">
                <a href="../action/register.php" >Register</a>
                    <a href="../action/appointment.php" id="active">Add apointment</a>
                </div>
            </li>
            
        </ul>
        <div id="body">
            <div id="left">
                <div class="left-side"></div>
                <div id="left-mid"><!--form div-->
                    <form name="appointment" method="POST" action="../src/add_appointment.php" autocomplete="off">
                        <table><!--table for form-->
                            <caption>
                                <h1 id="caption">ADD APPOINTMENT</h1><!--caption for form-->
                            </caption>
                            <tr>
                                <td class="labels">Email:</td>
                            </tr>
                            <tr>
                                <td class="inputs">
                                    <input id="email" type="text" name="email" class="inputs" placeholder="insert registered email" required>
                                </td>
                            </tr>
                            <tr>
                                <td class="labels">Type:</td>
                            </tr>
                            <tr>
                                <td class="inputs">
                                    <input list="type" name="type"  class="inputs" placeholder="select appointment type"required>
                                    <datalist id="type"><!-- selecting type-->
                                        <option>fever</option>
                                        <option>alergy</option>
                                        <option>blood test</option>
                                        <option>normal check</option>
                                        <option>other</option>
                                    </datalist>
                                </td>
                            </tr>
                            <tr>
                                <td class="labels">Date:</td>
                            </tr>
                            <tr>
                                <td class="inputs">
                                    <input type="date" id="date" class="inputs" name="date" required>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align: center;">
                                    <input type="submit" value="add" name="appointment" id="add" onclick="message()">
                                </td>
                            </tr>
                        </table>
                    </form>
                    <a id="link" href="../action/register.php">do not have your email registered, click here to register</a>
                </div>
                <div class="left-side"></div>
                
            </div>
            <div id="right">
                <?php
                include "../action/hiread.php";
                ?>
            </div>
        </div>
    </div>    
    <div class="footer">
        <?php
        include "../action/footer.php";
        ?>
    </div>
</body>
</html>