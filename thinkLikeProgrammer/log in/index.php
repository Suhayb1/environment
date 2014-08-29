<?php
session_start();
include('connect.php');
$name=$_POST['username'];
$pass=$_POST['pass'];

$query="select name from users where name=? and password=?";
$stmt=$con->prepare($query);
$stmt->bind_param('ss',$name,$pass);
$stmt->execute();
$stmt->bind_result($name);
if($row=$stmt->fetch())
{
	if($name=="admin")
	{
    	$_SESSION['admin']=$name;
    	header('Location: ../controlpanel/index.php');
   	}
   	else 
   	{
   		$_SESSION['username']=$name;
   	    header('Location:../home.php');
   	} 
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
