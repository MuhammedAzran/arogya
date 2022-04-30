<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>top</title>
    <style>
        *
        {
            box-sizing: border-box;
        }
        #top
        {
            /* background-color: rgba(245, 245, 245, 0.753); */
            background-image: linear-gradient(to right, #ccccff, #ffffff 50%, #ccccff);
            /* background: linear-gradient(to right, #ffffff 60%, #ccccff 100%); */
            float: left;
            width: 100%;
            background-size: cover;
            height: 140px;
            text-align: center;

        }
        .top-links
        {
            /* padding: 50px; */
            justify-content: center;
            align-items: center;
            margin: 50px;
        }
        a:link
        {
            color: black;
            text-decoration: none;
        }
        a:visited
        {
            color: black;
        }
        a:hover
        {
            text-decoration: underline;
        }
        a:active
        {
            color: red;
            text-decoration: none;
            background-color: transparent;
        }

        #logo
        {
            float: left;
            width: 20%;
            height: 120px;
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            
        }
        #arogya
        {
            width: 180px;
        }
        #middle
        {
            font-size: 120%;
            width: 60%;
            height: 125px;
            font-family: poppins;
            padding-top: 50px;
            float: left;
        }
        #top-right
        {
            float: left;
            width: 20%;
            height: 140px;
            font-family: poppins;
        }
        #btn1
        {
            float: left;
            padding: 20px;
            height: 70px;
            width: 100%;
            
        }
        #btn2
        {
            
            float: left;
            padding: 20px;
            height: 70px;
            width: 100%;
        }
        #top-right a:active
        {
            color: red;
            text-decoration: none;
        }
        .login
        {
            text-decoration: none;
            padding: 6px 15px;
            
        }
        .login a:active
        {
            color: red;
        }
        .login:hover
        {
            background-color: white;
            border-radius: 20px;
            box-shadow:0px 0px 6px 1px #a0a0a0d0;
            color: blue;
            text-decoration: none;
        }
        /* #top-right
        {
            float: left;
            width: 20%;
            height: 140px;
            padding-top: 50px;
            font-family: poppins;
        }
        #top-right a:active
        {
            color: red;
            text-decoration: none;
        }
        .logout
        {
            text-decoration: none;
            padding: 6px 15px;
            
        }
        .logout a:active
        {
            color: red;
        }
        .logout:hover
        {
            background-color: white;
            border-radius: 20px;
            box-shadow:0px 0px 6px 1px #a0a0a0d0;
            color: blue;
            text-decoration: none;
            
        } */
        /* ul 
        {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            width: 100%;
            font-family: poppins;
            background-color: #333;

        }
        li
        {
            float: left;
        }
        #active
        {
            background-color: #f7f7f7;
            color: #e60000;
            text-decoration: none;
        }
        li a, .dropbtn 
        {
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        
        li a:hover, .dropdown:hover .dropbtn 
        {
            background-color: #f7f7f7;
            color: #e60000;
            text-decoration: none;
        }
        
        li.dropdown 
        {
            display: inline-block;
        }
        
        .dropdown-content 
        {
            display: none;
            position: absolute;
            background-color: #f7f7f7;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }
        
        .dropdown-content a 
        {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        
        .dropdown-content a:hover 
        {
            background-color: #ffffff;
        }
        
        .dropdown:hover .dropdown-content 
        {
            display: block;
        } */
        body
        {
            margin: 0%;
        }
    </style>
</head>
<body>
        <div id="top">
            <a name="topmost">
                <div id="logo">
                    <img id="arogya" src="../asssets/images/Arogya.png" alt="Arogya_logo"><!--logo-->
                </div>
                <div id="middle">
                    <a href="../action/welcome.php" class="top-links" target="_blank"><b>welcome</b></a><!--welcome-->
                    
                    <a href="../action/contactus.php" class="top-links" target="_blank"><b>contact</b></a><!--contact-->
                </div>
                <div id="top-right">
                    <div id="btn1"><!--check profile-->
                        <a class="login" href="../action/myprofile.php">check profile</a>
                    </div>
                    <div id="btn2"><!--logout-->
                        <a class="login" href="../src/logout.php">Logout</a>
                    </div> 
                </div>
        </div>
        <!-- <ul class="ulist">
            <li id="active"><a href="#home">Home</a></li>
            
            <li class=dropdown>
                <a href="javascript:void(0)" class="dropbtn">Patient</a>
                <div class="dropdown-content">
                    <a href="../action/patients.php" target="_blank">Patient details</a>
                    <a href="">Add to ward</a>
                    
                </div>
            </li>
            <li class=dropdown>
                <a href="javascript:void(0)" class="dropbtn">Invoices</a>
                <div class="dropdown-content">
                    <a href="#">Admission</a>
                    <a href="#">Discharge</a>
                    
                </div>
            </li>
        </ul> -->
</body>
</html>