<?php
function finnUnikElement($matrise) {
    // Teller hvor mange verdier det er
    $antall = array_count_values($matrise);
    
    // Finner verdien som forekommer kun én gang
    $unikVerdi = array_search(1, $antall);
    
    // Finner posisjonen (nøkkelen) til denne verdien i originalmatrisen
    $posisjon = array_search($unikVerdi, $matrise);
    
    return [
        'posisjon' => $posisjon,
        'verdi' => $unikVerdi
    ];
}

// Test med eksempelmatrisen
$matrise = [5, 3, 0, 3, 0, 5, 7, 7, 9];
$resultat = finnUnikElement($matrise);

echo "Element nr. " . $resultat['posisjon'] . " har en verdi (" . $resultat['verdi'] . ") som kun forekommer én gang i matrisen.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 5-4</title>
</head>
<body>
    
</body>
</html>