<html>
	<body>
		
	<?php
    // Vanlig setup for å skrive inn hostnavnet, brukernavn, databasenavn og passord
    $tjener = "localhost";
    $brukernavn = "root";
    $passord = "root";
    $database = "fifaspillere";
  
$kobling = new mysqli($tjener, $brukernavn, $passord, $database);

if ($kobling->connect_error) {
	die("noe gikk galt_" . $kobling->connect_error);
} else {
	echo "koblingen virker.";
}

$kobling->set_charset("utf8");
	?>

<h1> Alle spillere </h1>

<?php 
  $sql = "SELECT * FROM lag JOIN fotballspillere ON lag.lag_id=fotballspillere.lag_id JOIN liga";

  $resultat = $kobling->query($sql);

  echo "<table>
      <tr>
        <td>Kategori</td>
        <td>Vare</td> 
        <td>Pris</td>
        <td>Rating</td>
        <td class='varebilde'> </td>
      </tr>";

  while($rad = $resultat->fetch_assoc()){
    $kategorinavn = $rad["kategorinavn"];
    $varenavn = $rad["varenavn"];
    $rating = $rad["rating"];
    $vare_id = $rad["vare_id"];
    $pris = $rad["pris"];
    $bildeurl = $rad["bildeurl"];



    echo "
      <tr>
        <td>$kategorinavn</td>
        <td><a href='vare.php?vare_id=$vare_id'> $varenavn </a></td> 
        <td>$pris$ </td>
        <td>$rating</td>
      </tr>"; 
  }

  echo "</table>";

?>







</body>


<style>
  table{border-collapse:collapse;}
  td {border:1px solid}
  
</style>

</html>