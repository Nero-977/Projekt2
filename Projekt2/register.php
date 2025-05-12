
<?php
session_start();
session_destroy();
$_SESSION = array();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anmelden</title>
      <!-- Verweis auf externen CSS-file -->
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <!-- Verweis auf externen PHP-file -->
<?php
include('Datenbank.php'); 
?>

    <!-- Hintergrundbild -->
    <img src="Logo\Hintergrund_FEWO.jpg" class="header-image" />



    <!-- Navigationscontainer -->
    <div class="container">
        <a href="Startseite.php"><img class="logo" src="Logo\Logo_FEWO.png" /></a>
         <!-- Navigationscontainer   <a class="menu-link" href="impressum.php">Impressum</a> -->  
        <a class="menu-link" href="anmelden.php">Anmelden</a>
    </div>



    <!-- Überschrift -->
    <h1 class="headline">
        Registrieren <span class="farbe"> Sie </span> sich! </h1>

    <!-- LOG IN -->
    <div class='login'>
        <form action="anmelden.php" method="POST">
            <div class="form-group">
                <label for="reg_name">Benutzername:</label>
                <!-- POPUP bei falscher Eingabe-->
                <div class="popup" id="reg_name_popup">nicht erlaubtes Zeichen!</div>
                <input class="inputelements" type="text" id="reg_name" name="reg_name">
                <div class="form-group">
                    <label for="passwort">Passwort:</label>
                    <input class="inputelements" type="password" id="reg_passwort" name="reg_passwort">
                </div>
                <div class="radio-group">
                    <input type="radio" name="mieter" id="mieter" value="1" style="width: 30px; height: 30px;" checked required>Mieter
                    <input type="radio" name="mieter" id="vermieter" value="0" style="width: 30px; height: 30px;" required>Vermieter
                </div>
                <div class="button-group">
                    <input class="button" type="submit" name="registrieren" value="Registrieren">
                    <input class="button" type="reset" value="Zurücksetzen">
                </div>
        </form>
    </div>


    <!-- Javascript -->
    <script language="JavaScript" src="JS.js"
        type="text/javascript"></script>
</body>

</html>