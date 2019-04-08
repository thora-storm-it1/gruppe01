<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Legg til spiller</title>
	<link rel="stylesheet" href="egenspiller.css">
</head>

<body>
	<h1>Legg til egen spiller!</h1>
	<?php
		if(isset($_POST['sendinn']))
	{

	
	include 'Databaseoppsett.php';
	
	$lag = $_POST['lag_id'];
	$fornavn = $_POST['fornavn'];
	$etternavn = $_POST['etternavn'];
	$fart = $_POST['fart'];
	$skudd = $_POST['skudd'];
	$pasning = $_POST['pasning'];
	$dribbling = $_POST['dribbling'];
	$forsvar = $_POST['forsvar'];
	$fysisk = $_POST['fysisk'];
	$overall = $_POST['overall'];
	$bildeurl = $_POST['bildeurl'];
		
	
		
	

	$sql = "INSERT INTO fotballspiller (fornavn, etternavn, fart, skudd, pasning, dribbling, forsvar, fysisk, overall, bildeurl, lag_id ) 	VALUES ('$fornavn','$etternavn', '$fart', '$skudd', '$pasning', '$dribbling', '$forsvar', '$fysisk', '$overall',  '$bildeurl', '$lag')";
	}
	

		 ?>
<div>
<!-- Input felt -->	
<form method="POST" enctype="multipart/form-data">
	<label for="bildeurl">Bildeurl</label>	
	<input type="text" name="bildeurl" placeholder="skriv inn bildeURL">
	<label for="fornavn">Fornavn</label>	
	<input type="text" name="fornavn" placeholder="skriv inn navn">
	<label for="etternavn">Etternavn</label>	
	<input type="text" name="etternavn" placeholder="skriv inn etternavn">
	<label for="fart">Fart</label>	
	<input type="text" name="fart" placeholder="skriv inn fart">
	<label for="skudd">Skudd</label>	
	<input type="text" name="skudd" placeholder="skriv inn skudd">
	<label for="pasning">Pasning</label>	
	<input type="text" name="pasning" placeholder="skriv inn pasining">
	<label for="dribbling">Dribbling</label>	
	<input type="text" name="dribbling" placeholder="skriv inn dribbling">
	<label for="forsvar">Forsvar</label>	
	<input type="text" name="forsvar" placeholder="skriv inn forsvar">
	<label for="fysisk">Fysisk</label>	
	<input type="text" name="fysisk" placeholder="skriv inn fysisk">
	<label for="overall">Overall</label>	
	<input type="text" name="overall" placeholder="skriv inn overall rating">
	<br>

	
	<?php
	/* Fotballag dropdown meny */
	include 'Databaseoppsett.php';
	$sql ="SELECT * FROM lag";
	$resultat = $kobling->query($sql);
	
		echo "<select name='lag_id'>";
	while ($rad = $resultat-> fetch_assoc()) {
		$lag=$rad["lag_id"];
		$lagnavn = $rad["lagnavn"];
		
		echo "<option value=$lag> $lagnavn </option>";
	}
	
	echo "</select>";
	
	?>
	
	
<br>
	<br>

	<a href="index.php"> <button onclick="confirmalert()" type="submit" name="sendinn" class="knapp">Send inn</button>
	<script type="text/javascript">
function confirmalert(){
var userselection = confirm("Er du sikker på at du vil legge til spiller?");
if (userselection == true){
    alert("Spiller er lagt til!");
  }
else{
    alert("Your account is not deleted!");
}    
}
</script>
	</a> 
	
	</form>
</div>
	
</script>
</body>
</html>
