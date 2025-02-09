<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body background="playground.jpg" class="body_deg">
    <div style="padding:20px; text-align:end;">
        <a  class="btn btn-primary" href="index.php">Home</a>
    </div>
    <center>
        <div  class="formdeg">
            <center class="tittle_deg">
                Login Form
                <h4>
                    <?php
                    error_reporting(0);
                    session_start();
                    session_destroy();
                        echo $_SESSION['loginmessage'];
                    ?>
                </h4>
            </center>
            <form class="login_form" action="login_check.php" method="POST">
                <div>
                    <label class="label_deg">Username</label>
                    <input type="text" name="username">
                </div>
                <div>
                    <label class="label_deg">Password</label>
                    <input type="password" name="password">
                </div>
                <div>
                    <input  class="btn btn-primary" type="submit" value="Log in" name="Login">
                </div>
            </form>
        </div>
    </center>
</body>
</html>
