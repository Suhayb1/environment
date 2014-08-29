<?php
    include('bootstrap/bootstrap.php');
    session_start();
    include("log in/connect.php");
    $_SESSION['username']="??";
    $_SESSION['admin']="??";
    session_destroy();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
        <div>
            <h1>
                user login
            </h1>
            <form method="post" action="log in/index.php">
               <table class="table table-striped">
                   <tr>
                        <td>user name </td>
                        <td><input type="text" name="username"></td>
                   </tr>
                   <tr>
                       <td>password</td>
                       <td><input type="text" name="pass"></td> 
                   </tr>
                  <tr><td>
                    <input type="submit" value="log in">
                </tr>
               </table>
            
            </form>
        </div>
    </body>
</html>
