<?php
session_start();
$page=$_GET["page"];
if($page=="games"||$page=="levels"||$page=="questions"){///////////////////////here put ||"pagename require sign in"

if(!isset($_SESSION['account']))
{
session_destroy();
echo '<meta http-equiv="refresh" content="0;url=home.php?page=login">';

}
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/custom.css" rel="stylesheet">
        
        <title></title>
    </head>
    <body class="bodycolor">
        <div class="container headcolor">
	        <div class="container-fluid">
	         	<header class="h1 headerfont ">Think Like Programmer</header>
	        </div>
	    </div>
	    <div class="row container">   
		 	<div class="col-lg-2 ">    
				<div class="list-group ">
					  <a href="#" class="list-group-item disabled">
					   pages
					  </a>
					  <a href="index.php?page=games" class="list-group-item">Games </a>
					  <a href="index.php?page=test" class="list-group-item">test(Morbi leo risus)</a>
					  				</div>
				<div class="row"></div>
			</div>
			<div class="col-lg-10 margin-b-10 " style="background-color:white"></div>
			<div class="col-lg-10">
				<div class="container "> 
	        		
	        			<?php
							$page=$_GET["page"];
							$page1=$page.".php";
							if(is_file($page1))
								include($page1);
							else
								include("games.php");
      					  ?>

	        		
        		</div>
        	</div>
		</div>	              
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
