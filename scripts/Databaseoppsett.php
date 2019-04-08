<?php
    // Vanlig setup for å skrive inn hostnavnet, brukernavn, databasenavn og passord
    $tjener = "localhost";
    $brukernavn = "root";
    $passord = "";
    $database = "fifaspillere";
  
$kobling = new mysqli($tjener, $brukernavn, $passord, $database);

if ($kobling->connect_error) {
	die("noe gikk galt_" . $kobling->connect_error);
}

$kobling->set_charset("utf8");

	?>