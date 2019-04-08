<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link href="stilark.css" rel="stylesheet">
</head>

<body>
	<?php
		include_once 'Databaseoppsett.php';

		if(isset($_GET["lag_id"])) {
		$lag_id = $_GET["lag_id"];
	} else {
		
		die ("Du må angi en spiller");
	}
	
/* Her kom vi over noen problemer som vi ikke klarte å løse vi er usikre på hvorfor, men vi antar det er fordi vi prøver å knytte primærnøkkelen opp mot en ikke eksisterende knytte det opp mot */
	
/*Vi brukte en del tid på å prøve med mange forkjellige databaser og forskjellige SELECT spørringer, men fikk samme feilmeldingen hver gang, dette var det siste forsjøket*/
 $sql = "SELECT * FROM lag JOIN table1 ON lag.lag_id=table1.lag_id JOIN fotballspiller ON table1.fotballspiller_id = fotballspiller.fotballspiller.id WHERE lag_id=$lag_id";
 $resultat = $kobling->query($sql);
	

 while ($rad = $resultat->fetch_assoc()) {
 $lagnavn = $rad["lagnavn"];
	$logourl = $rad["logourl"];
  $fornavn = $rad["fornavn"];

 

 echo "$lagnavn,$logourl,$fornavn"  ;
 
 }
	?>
</body>
</html>