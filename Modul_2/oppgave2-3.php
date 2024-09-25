
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 2-3</title>
</head>
<body>
  

    <?php 
    echo "<br>";

    // https://www.w3schools.com/php/filter_validate_email.asp

    //epost input
    $epost = "bruker@eksempel.com";

    // Valider e-postadressen
    if (filter_var($epost, FILTER_VALIDATE_EMAIL)) {
        Echo "E-postadressen '$epost' har riktig format.";
    } else {
       Echo "E-postadressen '$epost' har IKKE riktig format.";
    }
?>
</body>
</html>