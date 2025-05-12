<?php

if (!isset($_SESSION['Benutzername'])) {
  session_start();
  session_destroy();
  $_SESSION = array();
  $linkwechsel = 'Anmelden';

}
else
session_start();
$linkwechsel = 'Abmelden';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FEWO SEAHOUSES TEST</title>
    <!-- Style -->
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
  <?php



    // Hintergrundbild
    echo "<img src='Logo\Hintergrund_FEWO.jpg' class='header-image' />";


    //Navigationscontainer
    // <a class='menu-link' href='impressum.php'>Impressum</a>
    echo "<div class='container'>
      <a href ='Startseite.php'><img class='logo' src='Logo\Logo_FEWO.png'  /></a> 
     
      <a class='menu-link' href='anmelden.php'>" . $linkwechsel . "</a>
    </div>";


// Überschrift -->
    echo "<h1 class='headline'>
      Ein <span class='farbe'> ganzes Haus </span> nur für Dich
      <span class='farbe2'><br />" .$_SESSION['Benutzername'] ."</span>
    </h1>";


//Suchleiste -->
 echo "<div class = 'timeline'>
    <form action='Searchresults.php' method='POST'>
      <label for ='Urlaubsbeginn'>Datum auswählen:</label><br>
      <input class = 'inputelements' type='date' name='start' size='100px'>
      <input class = 'inputelements' type='date' name='ende'>
      <input class = 'button' type='submit' value='suchen'>
    </div>
      </form>";

      ?>
      <!-- Javascript -->
      <script language="JavaScript" src="JS.js"
      type="text/javascript"></script>
      
  </body>
</html>
