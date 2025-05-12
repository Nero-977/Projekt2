<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impressum</title>
</head>

<body>
    <?php
    session_start();
    if (!isset($_SESSION["user"]))
        exit("<p>Seite kann nicht angezeigt werden. Melden Sie sich zuerst an!<br><br><a href='startseite.php'>" .
            "Zur Anmeldung</a></p>");
    echo "<h1>WILLKOMMEN IM IMPRESSUM</h1>";
    echo "<p>Hallo " . $_SESSION["user"] . "</p>
    <p><a href='Shop.php'>Zur Startseite</a></p>
    <p><a href='anmelden.php'>Abmelden</a></p>";


    ?>

</body>

</html>