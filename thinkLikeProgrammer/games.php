
<div>
<?php
  include("db.php");
?>
<!-- Save for Web Slices (lib) -->

<hr width="80%" align=center>
<br><br><br><br><br><br>
 
 <hr width="80%" align=center>
 <form method="post">
 <table border="1" align="center" width="80%">
 <tr>
   <th>gmae name</th>
      
  </tr>
  <?php
  $gamex=mysql_query("select * from gamesnames");
  $count=1;
  while($game=mysql_fetch_row($gamex))
  {
  echo "<tr>";
    echo "<td bgcolor='white'>";
    echo "<a href='index.php?page=levels&gamename=$game[0]' style='color:red'>";
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