
<div>
<?php
  include("db.php");
?>
<!-- Save for Web Slices (lib) -->

 
 <hr width="80%" align=center>
 <?php
 $g=$_GET["gamename"];
 $l=$_GET["level"];
 echo"QUESTIONS OF LEVEL $L OF GAME $g";
 ?>
 <form method="post">
 <table border="1" align="center" width="80%">
 <tr>
   <th>levels</th>
      
  </tr>
  <?php
  $quesx=mysql_query("select * from question where gameName='$g' and level='$l' ORDER BY name ASC ");
  $count=1;
  while($ques=mysql_fetch_row($quesx))
  {
  echo "<tr>";
    echo "<td bgcolor='white'>";
    echo "<a href='ques[2]' style='color:red'>";
    echo "$ques[1]";
    echo "</a>";
  echo "</td>";
    echo "</tr>";
  $count++;
  }
  
  
  ?>
  
 </table>
 </form>
<!-- End Save for Web Slices -->
</div>