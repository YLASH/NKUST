<h1>Hello!!~</h1>

<p>BMI Calculate</p>

<?php
  
  $names = array("Tim", "Tam", "Tom" , "Tin" );
  $heights= array(168, 175, 188, 159);
  $weights= array(72,55,83,66);

  for ($i=0; $i<count($names); $i++) {
  	echo $names[$i]. "<br>" ;
    $height = $heights[$i];
    $weight = $weights[$i];
    echo "Height: ".$height."cm<br>";
    echo "Weight: ".$weight."kg<br>";
    $bmi=$weight/($height/100)**2;
    echo "BMI: ".$bmi. "<br>";
    if($bmi<18.5){
 	 echo "<b>該多吃點,體重有點太輕囉!!</b>";
 	} else if($bmi>24){
 	 echo "<b>該運動囉,體重有點太重囉!!</b>";
 	} else{
 	 echo "<b>保養很好,體重很標準唷!!</b>";
    }
    echo "<hr>";

 }

 ?>

