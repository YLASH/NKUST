
<?php
  for ($i=0; $i <5; $i++) { 
  echo " Hi!!\n";
  }
?>
<br>


<?php
 echo "<table border=1 width=300>";
 echo "<tr bgcolor=#eeeeee align=center><td>i</td><td>i**2</td><td>i**3</td></tr>";
 for ($i=1; $i <9 ; $i++) { 

 	if ($i%2)
 		echo "<tr bgcolor=#ccffff align=center>";
 	else echo "<tr bgcolor=#ffcccc align=center>";
	
	echo "<td>$i</td><td>".$i**2 ."</td><td>".$i**3 ."</td>";
	echo "</tr>";
}
 echo "</table>";
?>




<br>
<br>
<?php
  for ($i=0; $i <5; $i++) { 
  echo " k <br>";
  }
?>



<?php
  for ($i=1; $i <=6; $i++) { 
  echo "<h$i>This is me !</h$i>";
  }
?>