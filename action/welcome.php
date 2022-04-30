<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../asssets/css/welcome.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome</title>
</head>
<body>
    <div class="container">
        <div id="top">
            <a name="topmost">
            <div id="logo">
                <a href="http://localhost/xampp/Arogya/first.php"><img id="arogya" src="../asssets/images/Arogya.png" alt="Arogya_logo"></a>
            </div>
            <div id="middle">
                <a href="../action/welcome.php" class="top-links" ><b>welcome</b></a>
                
                <a href="https://www.google.com/" class="top-links"><b>contact</b></a>
            </div>
            <div id="top-right">
                <!-- <div id="btn1">
                    <a class="login" href="./action/register.php">Register</a>
                </div>
                <div id="btn2">
                    <a class="login" href="./action/login.php">Login</a>
                </div>             -->
            </div>
        </div>
        <div class="banner">
            <h1 class="heading">Welcome to Arogya Health care</h1>
        </div>
        <div class="content">
            <div class="left">
                <h2 class="sub-heading">Our services </h2>
                <img  style="margin-left: 80px;" id="" src="../asssets/images/istockphoto-1204001706-612x612.jpg">
                <div class="para">
                    <p>Arogya Health Care was established with the intention of providing services and has been services for more than 20 years in Sri Lanka. Currently, our organization was able to become a leading heath care service provider while competing with the others. Arogya Health Care was able to expand the services to all of the provincials in Sri Lanka by establishing branches to provide the best health care services. During the services, Arogya partnered with many other health care organization to improve the services.</p>
                </div>
                <div class="detail">
                    <div class="goal">
                        <h3 class="sub-heading" style="text-align: center;">Our goal</h3>
                        <p class="para" style="text-align: center;">To provide the best serices</p>
                    </div>
                    <div class="vision">
                        <h3 class="sub-heading" style="text-align: center;">Our vision</h3>
                        <p class="para" style="text-align: center;">To improve the health care of people</p>
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