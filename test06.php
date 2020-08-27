<?php
   for ($i=0; $i<10 ; $i++){
   	if ($i%2==1) continue;
   	echo $i . "<br>";
   	
   }


?>
<br>

<?php
   echo "continue ex: ";
   for ($i=0; $i<6 ; $i++){
   		if ($i==3) continue;
   	   	echo $i ;
   }
?>
<br>
<?php
   echo "break ex :";
   for ($i=0; $i<6 ; $i++){
   		if ($i==4) break;
   	   	echo $i;
   	   	
   }
?>