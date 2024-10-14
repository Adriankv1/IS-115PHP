<?php
// Oppretter en matrise med 9 tall i tilfeldig rekkefølge
$numbers = array(12, 45, 7, 33, 89, 21, 56, 3, 78);

// Regner ut summen av tallene
$sum = array_sum($numbers);

// Regner ut gjennomsnittet av tallene
$average = $sum / count($numbers);

// Sorterer matrisen for å finne median
sort($numbers);

// Finn medianverdien
$middleIndex = floor(count($numbers) / 2);
if (count($numbers) % 2 == 0) {
    // Hvis antall elementer er partall, finn snittet av de to midterste
    $median = ($numbers[$middleIndex - 1] + $numbers[$middleIndex]) / 2;
} else {
    // Hvis antall elementer er oddetall, velg midterste verdi
    $median = $numbers[$middleIndex];
}

// Finn det minste og det største tallet
$minValue = min($numbers);
$maxValue = max($numbers);

// Skriver ut resultatene
echo "Tallene i matrisen: " . implode(", ", $numbers) . "<br>";
echo "Summen av tallene: $sum<br>";
echo "Gjennomsnittet av tallene: $average<br>";
echo "Medianverdien: $median<br>";
echo "Minste tallet: $minValue<br>";
echo "Største tallet: $maxValue<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 4-5</title>
</head>
<body>
    
</body>
</html>