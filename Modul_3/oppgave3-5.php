<?php
// Konstant for vekt per hvetekorn i gram
define("WEIGHT_PER_GRAIN", 0.035);

$number_of_squares = 64;

// Initialiserer variabler
$total_grains = 0;
$grains_on_square = 1; // Start med 1 hvetekorn på første rute

echo "Antall hvetekorn på hver rute:\n";

// Gå gjennom hver rute på sjakkbrettet
for ($square = 1; $square <= $number_of_squares; $square++) {
    echo "<br>Rute $square: $grains_on_square hvetekorn\n";
    // Legg til hvetekorn på denne ruten til totalen
    $total_grains += $grains_on_square;
    // Dobler antall hvetekorn til neste rute
    $grains_on_square *= 2;
}

// Beregner total vekt i gram og deretter i tonn (1 tonn = 1 000 000 gram)
$total_weight_in_grams = $total_grains * WEIGHT_PER_GRAIN;
$total_weight_in_tons = $total_weight_in_grams / 1000000;

echo "<br>Totalt antall hvetekorn: {$total_grains}";
echo "<br>Total vekt i tonn: " . number_format($total_weight_in_tons) . " tonn";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 3-5</title>
</head>
<body>
    
</body>
</html>