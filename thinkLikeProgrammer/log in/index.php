<?php
session_start();
include('connect.php');
$name=$_POST['username'];
$pass=$_POST['pass'];

$query="select username from user where username=? and password=?";
$stmt=$con->prepare($query);
$stmt->bind_param('ss',$name,$pass);
$stmt->execute();
$stmt->bind_result($id);
if($row=$stmt->fetch())
{
    $_SESSION['username']=$id;
    header('Location:../home.php'); 
}
else
{
    header('Location:../index.php'); 
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        
    </body>
</html>
