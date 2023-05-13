<?php

session_start();
$con =  new mysqli(getenv("MYSQL_SERVICE_HOST"), "user", "password", "ecs417");


$name = $_POST['Name'];
$pass = $_POST['Password'];
$email = $_POST['Email'];

$s = "select * from user where name = '$name' ";
$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1){

    echo "Username is Taken";
    header('location:blog.php?info=UserNameTaken');
    
   
}
else{
    $reg= " insert into user(name, password, email) values ('$name', '$pass', '$email')";
    mysqli_query($con, $reg);
    header('location:blog.php?info=SuccessfullyRegistered');
}

?>

