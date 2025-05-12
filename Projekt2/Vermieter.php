<?php
session_start();



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <?php
    //Hintergrundbild
    echo "
       <img src='Logo\Hintergrund_FEWO.jpg' class='header-image' />";
    // Prüfen ob Nutzer angemeldet
    if (!isset($_SESSION['Benutzername'])) {
        exit("<p>Seite kann nicht angezeigt werden. Melden sie sich an!
        <br><a href='anmelden.php'>Zurück zum Anmelden</a>");
    }
    // Prüfen ob Mieter oder Vermieter
    if ($_SESSION['mieter_logged_in']) {
        $viewer = 'Mieter';
    } else
        $viewer = "Vermieter";
    //Begrüßung
    echo "<h1 class='headline'>Hallo <span class='farbe'>" . $_SESSION['Benutzername']  . "</span>,<br>Sie sind als <span class='farbe'>" . $viewer . "</span> eingeloggt!</h1>";
    ?>
    <!-- Navigationscontainer -->
    <div class="container">
        <a href="Startseite.php"><img class="logo" src="Logo\Logo_FEWO.png" /></a>
         <!-- Navigationscontainer   <a class="menu-link" href="impressum.php">Impressum</a> -->  
        <a class="menu-link" href="anmelden.php">Ausloggen</a>
    </div>




    </script>
</body>

</html>