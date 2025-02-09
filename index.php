<?php
    error_reporting(0);
    session_start();
    session_destroy();
    if($_SESSION['message']){
        $message=$_SESSION['message'];
        echo "<script type=text/javascript>
                alert('$message');
            </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <nav>
        <label class="logo">MY-COLLEGE</label>
        <ul >
            <li><a href="">Home</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="">Admission</a></li>
            <li><a class="btn btn-success" href="login.php">Login</a></li>
        </ul>
    </nav>
    <div class="section1">
        <!-- <label class="img_text">Welcome To School</label> -->
        <img class="main_img" src="school.jpg" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="welcome_img" src="playground.jpg" alt="">
            </div>
            <div class="col-md-8">
                <h1>Welcome to School</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum inventore at officiis quo eaque 
                    architecto culpa excepturi cupiditate facilis maiores aspernatur quidem quia impedit consequatur
                     reprehenderit velit, aliquam aperiam incidunt!</p>
            </div>
        </div>
    </div>
    <center>
        <h1>Our Teachers</h1>
    </center>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="teacher1.png" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum
                     inventore at officiis quo eaque architecto culpa excepturi 
                     cupiditate facilis maiores aspernatur quidem </p>
            </div>
            <div class="col-md-4">
            <img class="teacher" src="teacher2.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum
                     inventore at officiis quo eaque architecto culpa excepturi 
                     cupiditate facilis maiores aspernatur quidem </p>
            </div>
            <div class="col-md-4">
            <img class="teacher" src="teacher3.png" alt="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum
                     inventore at officiis quo eaque architecto culpa excepturi 
                     cupiditate facilis maiores aspernatur quidem </p>
            </div>
        </div>
    </div>
    <center>
        <h1>Our Courses</h1>
    </center>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img class="teacher" src="graphic.png" alt="">
                <p>graphic</p>
            </div>
            <div class="col-md-4">
            <img class="teacher" src="marketing.png" alt="">
            <p>marketing </p>
            </div>
            <div class="col-md-4">
            <img class="teacher" src="web.png" alt="">
            <p>web development</p>
            </div>
        </div>
    </div>
    <center>
        <h1 class="adm">Admission Form</h1>
    </center>
        <div align="center" class="admission_form">
            <form action="data_check.php" method="POST">
                <div class="adm_int">
                    <label class="label_text">Name</label>
                    <input class="inputdeg" type="text" name="name">
                </div>
                <div class="adm_int">
                    <label class="label_text" >Email</label>
                    <input class="inputdeg" type="text" name="email">
                </div>
                <div class="adm_int">
                    <label class="label_text" >Phone</label>
                    <input class="inputdeg" type="text" name="phone">
                </div>
                <div class="adm_int">
                    <label class="label_text" >Message</label>
                    <textarea class="inputtxt" id="message" name="message"></textarea>
                </div class="adm_int">
                <div class="adm_int">
                    <input class="btn btn-primary" id="submit" type="submit" value="Apply" name="apply">
                </div>
            </form>
        </div>
    <footer>
        <h3 class="footer_text">All copyrights reserved</h3>
    </footer>
</body>
</html>
