<?php

session_start();

$con =  new mysqli(getenv("MYSQL_SERVICE_HOST"), "user", "password", "ecs417");


$name = $_POST['Name'];
$pass = $_POST['Password'];
$email = $_POST['Email'];

$s = "select * from user where name = '$name' && password = '$pass' ";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
    header('location:ViewBlog.php?info=WelcomeBackUser');
}
else{
    header('location:blog.php?info=PasswordOrUsernameDoesntMatch');
}

?>