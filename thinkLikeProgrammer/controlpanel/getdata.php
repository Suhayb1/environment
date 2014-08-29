<?php
session_start();
include('../log in/connect.php');
if($_SESSION['admin']==""){
    header('Location: /thinkLikeProgrammer/index.php');
}
$game_name=$_POST['game-list'];
$level_no=$_POST['level-list'];
$query="select * from question where gameName=? and level=?";
$stmt=$con->prepare($query);
$stmt->bind_param('ss',$game_name,$level_no);
$stmt->execute();
$result=$stmt->get_result();

while($row=$result->fetch_array())
{
	foreach ($row as $x)
	{
		echo $x." ";
	}
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
</head>

<body>

</body>

</html>
