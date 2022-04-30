<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../asssets/css/contactus.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
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
                
                <a href="../action/contactus.php" class="top-links"><b>contact</b></a>
            </div>
            <div id="top-right">
                
            </div>
        </div>
        <div class="banner">
            <h1 class="heading">Arogya Health care - contact us</h1>
        </div>
    </div>
    <div class="container">
        <div class="left">
            <p class="sub-heading">Email: arogya@ymail.com</p>
            <p class="sub-heading">Telephone: 0112564731</p>
            <p class="sub-heading">Mobile, Nelshan: 0779645321</p>
            <p class="sub-heading">Mobile, Kevin: 0765432756</p>
        </div>
        <div class="right">
            <?php
            include "../action/hiread.php";
            ?>
        </div>
    </div>
</body>
<?php
    include "../action/footer.php";
?>
</html>