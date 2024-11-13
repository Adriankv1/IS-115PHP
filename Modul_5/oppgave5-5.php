<?php
function erAnagram($ord1, $ord2) {
    // Konverterer til små bokstaver og fjerner eventuelle mellomrom
    $ord1 = strtolower(str_replace(' ', '', $ord1));
    $ord2 = strtolower(str_replace(' ', '', $ord2));
    
    // Sjekker først om ordene har samme lengde
    if (strlen($ord1) !== strlen($ord2)) {
        return false;
    }
    
    // Konverterer ordene til arrays av bokstaver og sorterer dem
    $bokstaver1 = str_split($ord1);
    $bokstaver2 = str_split($ord2);
    
    sort($bokstaver1);
    sort($bokstaver2);
    
    // Sammenligner de sorterte arrayene
    return $bokstaver1 === $bokstaver2;
}

// Teste funksjonen
$ord1 = "vente";
$ord2 = "evnet";

if (erAnagram($ord1, $ord2)) {
    echo "'$ord1' og '$ord2' er anagrammer av hverandre.<br>";
} else {
    echo "'$ord1' og '$ord2' er ikke anagrammer av hverandre.<br>";
}

// Test med flere eksempler
$testOrd = [
    ['sju', 'jus'],
    ['noen', 'neon'],
    ['middag', 'fredag']  // Ikke et anagram
];

// Sjekker om ordene er anagrammer
foreach ($testOrd as $ordPar) {
    echo "\n'" . $ordPar[0] . "' og '" . $ordPar[1] . "' er ";
    if (!erAnagram($ordPar[0], $ordPar[1])) {
        echo "ikke ";
    }
    echo "anagrammer av hverandre.<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 5-5</title>
</head>
<body>
    
</body>
</html>