<?php
session_start();
if(isset($_SESSION['account']))
{

echo '<meta http-equiv="refresh" content="0;url=index.php">';

}
?>

<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Untitled 1</title>
</head>

<body>
<form method="post"  action="checklogin.php" enctype="multipart/form-data">
<table width="100%" border="0">
<tr><td><input type="text" name="username">name</td><td><input type="text" name="password">password</td></tr>
<tr><td><input type="submit" name="login" value="log in">login</td></tr>

</table>
</form>
</body>

</html>
