<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../asssets/css/staff_login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff login</title>
</head>
<body>
    <div class="container">
        <div id="top">
            
        </div>
        <div id="content">
            <div class="side"></div>
            <div id="mid">
                <div class="mid-sub">
                <div id="heading"><h1>STAFF LOGIN</h1></div>
                <form name="loginForm" method="POST" action="../src/check_login.php" autocomplete="off">
                    <table>
                        <tr>
                            <td class="labels">Email:</td>
                            
                        </tr>
                        <tr>
                            <td>
                                <input type="email" name="username" class="inputs" placeholder="insert staff email" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="labels">Password:</td>
                            
                        </tr>
                        <tr>
                            <td>
                                <input type="Password" name="password" class="inputs" placeholder="insert password" required>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" style="text-align:left;">
                            <input  type="submit" value="login" name="submit" id="submit">
                        </td>
                        <td></td>
                        </tr>
                        <tr>
                            <!-- <td class="labels">
                                <a  href="../action/register.php">don not have an account yet, click here to register</a>
                            </td> -->
                        </tr>
                    </table>
                </form>
                </div>
                <div class="mid-sub">
                    <img id="login_image" src="../asssets/images/staff_login.jpg" alt="login_image">
                </div>
            </div>
            <div class="side"></div>
        </div>
        <div id="bottom"></div>
    </div>
</body>
</html>