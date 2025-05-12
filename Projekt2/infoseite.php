<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Serverantwort</title>
    <!-- Verweis auf externen CSS-file -->
    <link rel="stylesheet" href="style.css" />
</head>

<body>

    <!-- Hintergrundbild -->
    <img src="Logo\Hintergrund_FEWO.jpg" class="header-image" />

    <!-- Navigationscontainer -->
    <div class="container">
        <a href="Startseite.php"><img class="logo" src="Logo\Logo_FEWO.png" /></a>
         <!-- Navigationscontainer   <a class="menu-link" href="impressum.php">Impressum</a> -->  
        <a class="menu-link" href="anmelden.php">Anmelden</a>
    </div>


    <!-- Hier wird Inhalt des Containers erstellt -->
    <?php
    $title = $_GET['title'] ?? '';
    $text = $_GET['text'] ?? '';
    $link = $_GET['link'] ?? '';
    
    echo "<div class ='headline'><h2>" . htmlspecialchars($title) ."</div><div class ='headline_serverantwort'></h2><p>" . htmlspecialchars($text) . "</p></div>;"
    ?>





</body>

</html>