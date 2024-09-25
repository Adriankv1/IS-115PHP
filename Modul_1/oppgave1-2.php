<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 2</title>
</head>
<body>
    <p><a href="index.php">Gå tilbake</a></p>
</body>
</html>
<?php
phpinfo();
/*  Når man kaller phpinfo() funksjonen så får man se
    alle instillinger som er i vår PHP versjon. Søker man
    'display_errors' kan vi se at display_errors er skrudd på
    for både local verdi og master verdien. 

    Vi kan se hvor ROOT-en er lagret ved å søke 'DOCUMENT_ROOT'
    Der ser man at ROOT-en til dokumentet er under C:/xampp/htdocs

    Det er lurt å kjenne til phpinfo() funksjonen fordi man får se
    hvilke innstillinger som er blitt satt og hva slags setup man har.
    phpinfo() er også et godt debugging verktøy siden den inneholder 
    alle EGPCS data. (Environment, GET, POST, Cookie, Server)
*/
?>
