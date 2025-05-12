<?php
session_start();
session_unset();
session_destroy();
$_SESSION = array();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <a class="menu-link" href="register.php">Registrieren</a>
    </div>



    <!-- Überschrift -->
    <h1 class="headline">
        Melden <span class="farbe"> Sie </span> sich an! </h1>

    <!-- LOG IN -->
    <div class='login'>
        <form action="Datenbank.php" method="POST">
            <div class="form-group">
                <label for="login_name">Benutzername:</label>
                <input class="inputelements" type="text" id="login_name" name="login_name">
            </div>
            <div class="form-group">
                <label for="passwort">Passwort:</label>
                <input class="inputelements" type="password" id="login_passwort" name="login_passwort">
            </div>
            <div class="button-group">
                <input class="button" type="submit" name ="loginbutton" value="Anmelden">
                <input class="button" type="reset" value="Zurücksetzen">          
            </div>
            <div class="form-group label">
            <a class="link"  href="register.php">Noch kein Benutzerkonto?</a>
            </div> 
        </form>
    </div>


      <!-- Javascript -->
      <script language="JavaScript" src="JS.js"
      type="text/javascript"></script>
</body>

</html>
