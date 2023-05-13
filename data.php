<?php
$con =  new mysqli(getenv("MYSQL_SERVICE_HOST"), "user", "password", "ecs417");

if (!$con)
{
    echo"<h2>THERE IS NO CONNECTION</h2>";
}

$sql = "SELECT * FROM blogpost";
$result = mysqli_query($con, $sql);

if (isset($_REQUEST["newpost"])){
    $title = $_REQUEST["title"];
    $body = $_REQUEST["body"];
    $date = date('Y-m-d H:i:s');

    $sql = "INSERT INTO blogpost (title, body, dandt) VALUES ('$title', '$body', '$date')";
    
    
    
    mysqli_query($con, $sql);
    

    header('location:ViewBlog.php?info=post_added');
    exit();
}


?>