<?php
// Oppretter en matrise (assosiativ array) med spesifikke nøkler og verdier
$matrise = array(
    0 => 10,
    3 => 25,
    5 => 35,
    7 => 50,
    8 => 65,
    15 => 100
);

// Skriv ut matrisen ved bruk av print_r()
echo "Utskrift ved bruk av print_r():<br>";
print_r($matrise);
echo "<br><br>";

// Skriv ut matrisen ved hjelp av en foreach-løkke
echo "Utskrift ved hjelp av en løkke:<br>";
foreach ($matrise as $nokkel => $verdi) {
    echo "Nøkkel: $nokkel, Verdi: $verdi<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 4-1</title>
</head>
<body>
    
</body>
</html>