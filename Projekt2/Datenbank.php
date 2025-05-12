<?php
   define("MYSQL_HOST","localhost");  // Host-Name
   define("MYSQL_USER","root");       // Benutzername
   define("MYSQL_PASS","");   // Passwort
   define("MYSQL_DATABASE","web42");  // Datenbank-Name
   $verbindung = mysqli_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_DATABASE);
   if (mysqli_connect_errno()) {
    die('Verbindung fehlgeschlagen');
}

    //NEUEN DATENSATZ HINZUFÜGEN
    if (isset($_POST['registrieren'])) {
        $neuerBenutzername = $_POST['reg_name'];
        $neuesBenutzerpasswort = $_POST['reg_passwort'];
        $neueBenutzerrolle = $_POST['mieter'];
        $result = mysqli_query($verbindung, "INSERT INTO user (Benutzername, Passwort, Rolle) VALUES ('$neuerBenutzername','$neuesBenutzerpasswort', '$neueBenutzerrolle')");
            if ($result == true) {
                closeConnection($verbindung);
                $title ="Registrierung erfolgreich";
                $text ="Sie haben sich erfolgreich registriert";
                $link = '<p>Zum <a href="anmelden.php">Login</a></p>';
                header("Location: http://localhost/Projekt2/infoseite.php?title=" . urlencode($title) . "&text=" . urlencode($text) . "&link=" . urlencode($link));
                exit();
        } else {
            $title ="Registrierung fehlgeschlagen";
            $text ="Fehler während des Datenbankeintrages. Bitte vesuchen Sie es noch einmal.";
            $link = '<p>Zurück zur <a href="Startseite.php">Startseite</a></p>';
            header("Location: http://localhost/Projekt2/infoseite.php?title=" . urlencode($title) . "&text=" . urlencode($text) . "&link=" . urlencode($link));
            exit();
        }
        
    }
    //LOGIN
    
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["loginbutton"])) {
        // Formulardaten abrufen
        session_start();
        $username = $_POST["login_name"];
        $password = $_POST["login_passwort"];
        // db für login aufrufen
        checkLogin($username, $password , $verbindung);
    }




    function closeConnection($verbindung) {
        // Verbindung schließen
        mysqli_close($verbindung);
    }

    function checkLogin($username , $password , $verbindung) {
        
       
           // Login-Abfrage
           $abfrage = mysqli_query($verbindung, "SELECT * FROM user WHERE Benutzername = '$username' && Passwort = '$password'");
           $anzahl = mysqli_num_rows($abfrage);
           // Überprüfen ob Eintrag vorhanden
           if ($anzahl > 0) {
               $row = mysqli_fetch_assoc($abfrage);
               $_SESSION['Benutzername'] = $row['Benutzername'];
       
                // Der Benutzer ist Vermieter
                if ($row['Rolle'] == 0) {
                    $_SESSION['vermieter_logged_in'] = true;
                    $_SESSION['mieter_logged_in'] = false;
                    header('Location: http://localhost/Projekt2/Vermieter.php');
                    exit();
             
           }    else {
                // Der Benutzer ist Mieter
                    $_SESSION['mieter_logged_in'] = true;
                    $_SESSION['vermieter_logged_in'] = false;
                    header('Location: http://localhost/Projekt2/Startseite.php');
                    exit();
           }
           } else {
               $title = 'Login fehlgeschlagen';
               $text = 'Username oder Passwort falsch. Versuchen Sie es bitte erneut.';
               $link = '<p>Zum <a href="login.html">Login</a>.</p>';
               $_SESSION['mieter_logged_in'] = false;
               $_SESSION['vermieter_logged_in'] = false;
               header("Location: http://localhost/Projekt2/infoseite.php?title=".urlencode($title)."&text=".urlencode($text)."&link=".urlencode($link));
               exit();
           }
       }

?>

