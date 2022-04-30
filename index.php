<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./asssets/css/first.css">
    <link rel="stylesheet" href="./asssets/css/test.css">
    <link rel="shortcut icon" type="image/x-icon" href="./favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="./asssets/js/first.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arogya Health Care</title>
</head>
<body>
    <div id="top">
	<a name="topmost">
        <div id="logo">
            <a href="http://localhost/xampp/Arogya/first.php"><img id="arogya" src="./asssets/images/Arogya.png" alt="Arogya_logo"></a>
        </div>
        <div id="middle">
            <a href="./action/welcome.php" class="top-links" target="_blank"><b>welcome</b></a>
            
            <a href="" class="top-links" target="_blank"><b>contact</b></a>
        </div>
        <div id="top-right">
            <div id="btn1">
                <a class="login" href="./action/register.php">Register</a>
            </div>
            <div id="btn2">
                <a class="login" href="./action/login.php">Login</a>
            </div>            
        </div>
    </div>
    <ul class="ulist">
        <li id="active"><a href="./index.php" id="active">Home</a></li>
        <li class=dropdown>
            <a  class="dropbtn">Services</a>
            <div class="dropdown-content">
                <a href="./action/register.php">Register</a>
                <a href="./action/appointment.php">Add apointment</a>
            </div>
        </li>
    </ul>
    
    <div class="banner">
        <img id="building" src="./asssets/images/banner4.jpg" alt="image2">
        <div class="text">Arogya Health care services are <br>made for you</div>
    </div>
    <div class="container">
        <div class="left">
            <div class="left-top">
                <h3 class="h3"><u>The best is selected</u></h3>
                <p class="sub-para">
                    Arogya Healthcare is the most accredited hospital in the Sri Lankan healthcare sector. <br>Since 2002, Arogya Health Care has revolutionized the healthcare industry through infrastructure <br>development and advancement of products and services, with a view to deliver healthcare that is <br>on par with global medical standards.
                </p>
            </div>
            <div class="left-bottom">
                <h3 style="font-family: poppins; font-size:20px; text-align:center;">Founders of Arogya Healthcare</h3>
                <div class="bottom-container">
                    <div class="grid-item">
                        <div class="gallery">
                            <img class="image" src="./asssets/images/ceo.jpg">
                        </div>
                        <div class="desc">
                            CEO<br>James Ellijah
                        </div>
                    </div>
                    <div class="grid-item">
                        <div class="gallery">
                            <img class="image" src="./asssets/images/coceo.jpg">
                        </div>
                        <div class="desc">
                            CO-CEO<br>Noah Levi
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="right-top">
                <img id="doctors" src="./asssets/images/doctors_diss.jpg" alt="image2">
                <h2 id="healthcare-caption"><u>Healthcare professionals</u></h2>
                <p class="healthcare-para">
                    Arogya Healthcare has staff that are professional in the healthcare services.<br>
                    Arogya Healthcare service excellence is dynamic, which is why we constantly seek to enhance our service delivery in a bid to provide our customers with world-care healthcare experiences.
                </p>
            </div>
            <div class="right-bottom">

            </div>
        </div>
    </div>
    <div class="footer">
        <?php
        include "./action/footer.php"
        ?>
    </div>
</body>
</html>