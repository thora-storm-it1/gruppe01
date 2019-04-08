<?php
include_once 'Databaseoppsett.php';
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Fotballspillere</title>
<link href="stilark.css" rel="stylesheet">
</head>

<body>

<div class="innpakning">
  <header> 
    <div class="logo"> 
      <h2>Fotballspillere</h2> </div>
  </header>
  
  <div id="content">
    <section class="sidebar"> 
           <div id="menubar">
        <nav class="menu">
			<div class="knapp_container" align="center"><a class="knapp" href="Egenspiller.php" target="_blank" rel="nofollow noopener">Legg til egen spiller!</a></div>
   <br>
          <h2>Lag </h2>
   <hr>
<ul>
            <?php
$sql      = "SELECT * FROM lag";
$resultat = $kobling->query($sql);
while ($rad = $resultat->fetch_assoc()) {
    $lag_id  = $rad["lag_id"];
    $lagnavn = $rad["lagnavn"];
    
    echo "<li><a href='lagspillere.php?lag_id=$lag_id'>$lagnavn </a> </li>";
}
?>
         </ul>
        </nav>
      </div>
    </section>
    <section class="hovedinnhold">
        <?php
$sql      = "SELECT * FROM lag JOIN fotballspiller ON lag.lag_id=fotballspiller.lag_id";
$resultat = $kobling->query($sql);
		
while ($rad = $resultat->fetch_assoc()) {
    $fotballspiller_id = $rad["fotballspiller_id"];
    $fornavn           = $rad["fornavn"];
    $etternavn         = $rad["etternavn"];
    $bildeurl          = $rad["bildeurl"];
    $lagnavn           = $rad["lagnavn"];
	$logourl		   = $rad["logourl"];
    
  
	
    echo "<div class='flex'>
	<article class='spillerInfo'>
 <div><img class='spillerbilde alt='portrett' src='$bildeurl'></div>
 <p class='spillerNavn'>$fornavn $etternavn</p>
  <div><img class='laglogo' alt='lag' src='$logourl' class='logourl'></div>
 <a href='Enspiller.php?fotballspiller_id=$fotballspiller_id'>
 <input type='button' name='button' value='Utforsk' class='utforskKnapp'></div></a>";
  
	
}
	
?>

    </section>
  </div>

	</div>
</body>
</html>