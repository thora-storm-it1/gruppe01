<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
    // Vanlig setup for å skrive inn hostnavnet, brukernavn, databasenavn og passord
    $dbhost = "localhost";
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'Skjema1';
    //$conn er min kobling til databasen, her sender jeg videre alle de verdiene jeg har skrevet inn ovenfor
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
    //Lager meg et query, velg alle bilde jeg har i databasen
    $sql = "SELECT * FROM bilder";
    //Resultatet fra querykallet legger jeg i en "variabel" med navn $result
    $result = $conn->query($sql);
    //Går igjennom alle resultene mine, dette gjør while($row = result -> fetch_assoc()) for meg, så jeg slipper å tenke mer på det.
    while($row = $result-> fetch_assoc()){
      //Hver rad i databasen min inneholder en Bildeurl, antall likes og en unik ID, disse henter jeg ut.
      $bildeURL = $row["bildeURL"];
      $likes = $row["likes"];
      $id = $row["id"];
		?>
</body>
</html>