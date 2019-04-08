<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Utforsk</title>
	<link rel="stylesheet" href="enspiller.css">
</head>

<body>
	<div class="knapp_container" align="center"><a class="knapp" href="index.php">Gå tilbake</a></div>
	<?php
	include_once 'Databaseoppsett.php';
	
	if(isset($_GET["fotballspiller_id"])) {
		$fotballspiller_id = $_GET["fotballspiller_id"];
	} else {
		
		die ("Du må angi en spiller");
	}
	
	
		$sql ="SELECT * FROM fotballspiller JOIN lag ON fotballspiller.lag_id=lag.lag_id WHERE fotballspiller_id=$fotballspiller_id";
	$resultat = $kobling->query($sql);
	
	while ($rad = $resultat->fetch_assoc()) {
		$bildeurl = $rad["bildeurl"];
		$fornavn = $rad["fornavn"];
		$etternavn = $rad["etternavn"];
		$fart = $rad["fart"];
		$skudd = $rad["skudd"];
		$pasning = $rad["pasning"];
		$dribbling = $rad["dribbling"];
		$forsvar = $rad["forsvar"];
		$fysisk = $rad["fysisk"];
		$overall = $rad["overall"];
		$lagnavn = $rad["lagnavn"]; 
	}
	
	

	?>
	<div class="innpakning">
		<?php	echo "<img alt='portrett' src='$bildeurl'>"; ?>

	<table>
  <caption>Statement Summary</caption>
  <thead>
    <tr>
        <th scope="col">Navn</th>
	    <th scope="col">Lagnavn</th>
        <th scope="col">Fart</th>
        <th scope="col">Skudd</th>
	    <th scope="col">Pasning</th>
		<th scope="col">Dribbling</th>
		<th scope="col">Forsvar</th>
		<th scope="col">Fysisk</th>
		<th scope="col">Overall</th>
    </tr>
  </thead>
  <tbody>
	  <?php
	  
	  echo "
    <tr>
      <td data-label='Navn'>$fornavn $etternavn</td>
      <td data-label='Lagnavn'>$lagnavn</td>
      <td data-label='Fart'>$fart</td>
      <td data-label='Skudd'>$skudd</td>
	  <td data-label='Pasning'>$pasning</td>
	  <td data-label='Dribbling'>$dribbling</td>
	  <td data-label='Forsvar'>$forsvar</td>
	  <td data-label='Fysisk'>$fysisk</td>
	  <td data-label='Overall'>$overall</td>

    </tr>"
		?>
  </tbody>
</table>
</div>
	

</body>
</html>


