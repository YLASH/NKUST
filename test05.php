<h2>Interest trial</h2>
<hr>

<form method="POST" action="test05.php">   
  本金 : <input type="text" size=10 name="fond" value="100000"> 元 <br>
  利率 : <input type="text" size=10 name="rate" value="1.2"> %  <br>
  期數 : <input type="text" size=10 name="year" value="20">年 <br>
  <input type="submit" value="Cal">
</form>






<?php

  $fond = $_POST["fond"];
  $rate = $_POST["rate"];
  $year = $_POST["year"];
  
  echo "<table border=1.5 width=250>";

  echo "<tr>";
  echo "<td bgcolor=#F2D8B3>本金 </td> <td align=right>NTD$".$fond."</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td bgcolor=#F2D8B3>利率 </td> <td align=right>".$rate."%</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td bgcolor=#F2D8B3>期數</td><td align=right>".$year."年</td>";
  echo "</tr>";

  $s_amount= $fond* (1+$rate/100*$year);
  $c_amount= $fond* (1+$rate/100) ** $year;

  echo "<tr>";
  echo "<td bgcolor=#F2D8B3>單利 trial</td><td align=right>NTD$".$s_amount."</td>";
  echo "</tr>";

  echo "<tr>";
  echo "<td bgcolor=#F2D8B3>複利 trial</td><td align=right>NTD$".(int) $c_amount."</td>";
  echo "</tr>";
  echo "</table>";

?>



