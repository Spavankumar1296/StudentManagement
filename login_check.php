<?php

    error_reporting(0);
    session_start();
    $host="localhost";
    $user="root";
    $password="";
    $db="school";

    $data=mysqli_connect($host,$user,$password,$db);

    if($data===false){
        die("connection error");

    }
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name=$_POST['username'];
        $passwords=$_POST['password'];
        $sql="SELECT * FROM user WHERE username='".$name."' AND password='".$passwords."'";
        $result=mysqli_query($data,$sql);
        $row=mysqli_fetch_array($result);
        

        if($row["usertype"]=="student"){
            $_SESSION['username']=$name;
            $_SESSION['usertype']="student";
            header("location:studenthome.php");
        }
        elseif($row["usertype"]=="admin"){
            $_SESSION['username']=$name;
            $_SESSION['usertype']="admin";
            header("location:adminhome.php");
        }
        else{
            session_start();
            $message= "username or password are not matched";
            $_SESSION['loginmessage']=$message;
            header("location:login.php");

        }

    }
?>