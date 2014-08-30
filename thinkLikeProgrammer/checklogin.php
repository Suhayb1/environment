<?php 
session_start();
?>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 4</title>
</head>

<body>
<?php 
$username1=$_POST['username'];
$password1 = $_POST['password'];
include("db.php");
$xx=mysql_query("select * from users where name='$username1' and password=md5('$password1')");
$x=mysql_fetch_row($xx);

if (!empty($x[0]) ){
$_SESSION['account']=$x[0];
echo '<meta http-equiv="refresh" content="0;url=index.php?page=games">';

}
else
{

echo "username or password  is incorrect ";
echo '<meta http-equiv="refresh" content="1;url=login.php">';
}
 
 
?>
</body>

</html>
