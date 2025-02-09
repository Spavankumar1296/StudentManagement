<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username'])){
    header("location:login.php");
}
elseif($_SESSION['usertype']=='student'){
    header("location:login.php");
}

$host="localhost";
$user="root";
$password="";
$db="school";
$data=mysqli_connect($host,$user,$password,$db);

if($data==false){
    die("connection error");
}
$sql="SELECT * FROM user WHERE usertype='student'";
$result=mysqli_query($data,$sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <?php
        include 'admin_css.php'
    ?>
    <style>
        .table_th{
            padding:20px;
            font-size: 20px;
            background-color: skyblue;
        }
        .table_td{
            padding: 20px;
        }
    </style>
</head>
<body> <?php
        include 'admin_sidebar.php'
        
    ?>
    <div class="content">
        <center>
            <h1>Student Data</h1>

            <?php
                if($_SESSION['message']){
                    echo $_SESSION['message'];
                }
                unset($_SESSION['message']);
            ?>
            <br>
            <table border="1px">
                <tr>
                    <th class="table_th">Username</th>
                    <th class="table_th">Email</th>
                    <th class="table_th">Phone</th>
                    <th class="table_th">Password</th>
                    <th class="table_th">Delete</th>
                    <th class="table_th">Update</th>
                </tr>

                <?php
                    while($info=$result->fetch_assoc()){
                        

                ?>
                <tr>
                    <td class="table_td">
                        <?php
                            echo"{$info['username']}";
                        ?>
                    </td>
                    <td class="table_td">
                    <?php
                            echo"{$info['email']}";
                        ?>
                    </td>
                    <td class="table_td">
                    <?php
                            echo"{$info['phone']}";
                        ?>
                    </td>
                    <td class="table_td">
                        <?php
                            echo"{$info['password']}";
                        ?>
                    </td>
                    <td class="table_td">
                    <?php
                       echo "<a class='btn btn-danger' onClick=\"javascript: return confirm('Delete')\" href='delete.php?student_id={$info['id']}'>Delete</a>"
                       ?>
                    </td>
                    <td class="table_td">
                    <?php
                       echo "<a class='btn btn-success'href='update_student.php?student_id={$info['id']}'>Update</a>"
                       ?>
                    </td>
                </tr>

                <?php
                    }
                ?>
            </table>
        </center>
    </div>
    
</body>
</html>