<?php
// Aktiver umiddelbar sending av output til nettleseren
//ob_implicit_flush(true);
ob_end_flush();

// Start summen på 0
$sum = 0;

// Tell fra 0 til 9
for ($i = 0; $i <= 9; $i++) {
    // Skriv ut tallet og bruk <br> for linjeskift
    echo $i . "<br>";

    // Legg til tallet i summen
    $sum += $i;

    // ob_flush();
    flush();

    // Pause i 1 sekund
    sleep(1);
}

// Etter tellingen, vent 2 sekunder
sleep(2);

// Skriv ut summen etter en kort pause
echo "Ferdig å telle! Summen av tallene ble $sum.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 3-2</title>
</head>
<body>
    
</body>
</html>