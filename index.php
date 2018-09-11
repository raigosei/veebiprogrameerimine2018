<?php
  //echo "See on minu esimene php!"; //rumal teade
  $firstname = "Daniil";
  $lastname = "Stoljar";
  $dateToday = date("d.m.Y");
  $hourNow = date("G");
  $partOfDay = "";
  if ($hourNow < 8){
	$partOfDay = "Varajane hommik";
  } 
  if ($hourNow >= 8 and $hourNow < 16){
	$partOfDay = "koolipäev";
  }
  if ($hourNow > 16){
	$partOfDay = "Loodetavasti vaba aeg";
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"> 
	<title>
	<?php
	   echo $firstname;
	   echo " ";
	   echo $lastname;
	?>
	, student</title>
  </head>
  <body>
  <h1>
  <?php
    echo $firstname ." " .$lastname;
  ?>
  </h1>
  <P>Sinu arvuti plahvatab 5 sekundi pärast, jookse ära. Nüüd on siin ka <a href="../http://www.tlu.ee">TLÜ</a> pilt.</p>
  <?php
    echo "<p>Tänane kuupäev on: " .$dateToday .".</p> \n"; 
	echo "<p> Lehe avamise hetkel oli kell " .date("H:i:s") .", käes oli " .$partOfDay .".</p> \n";
  ?>
  <img src="http://greeny.cs.tlu.ee/~rinde/veebiprogrammeerimine2018s/tlu_terra_600x400_3.jpg" alt="TLÜ Terra õppehoone">
  <p>Minu sõber ka istub siin <a href="../ https://www.google.com/url?sa=i&rct=j&q=&esrc=s&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwito_jY27LdAhUIFywKHV4HB0MQjRx6BAgBEAU&url=https%3A%2F%2Fcurtet.com%2Fvictoria-lifestyle&psig=AOvVaw1SqXz_LGoTB4jIH25pohgS&ust=1536747228797809" target="_blank">samas</a></p>
  </body>
</html>