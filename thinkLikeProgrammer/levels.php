
<div>
<?php
  include("db.php");
?>
<!-- Save for Web Slices (lib) -->

 
 <hr width="80%" align=center>
 <?php
 $g=$_GET["gamename"];
 echo"LEVELS OF $g";
 ?>
 <form method="post">
 <table border="1" align="center" width="80%">
 <tr>
   <th>levels</th>
      
  </tr>
  <?php
  $levelx=mysql_query("select level from question where gameName='$g' ORDER BY 'level' ASC ");
  $count=1;
  while($level=mysql_fetch_row($levelx))
  {
  echo "<tr>";
    echo "<td bgcolor='white'>";
    echo "<a href='index.php?page=levels&gamename=$g&level=$level[0]' style='color:red'>";
    echo "$game[0]";
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