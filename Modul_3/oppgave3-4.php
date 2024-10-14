<?php
// Kommuner og deres fylker
$kommuner = [
    "Kristiansand" => "Agder",
    "Lillesand" => "Agder",
    "Birkenes" => "Agder",
    "Harstad" => "Troms og Finnmark",
    "Kvæfjord" => "Troms og Finnmark",
    "Tromsø" => "Troms og Finnmark",
    "Bergen" => "Vestland",
    "Trondheim" => "Trøndelag",
    "Bodø" => "Nordland",
    "Alta" => "Troms og Finnmark"
];

// Kommunen som skal sjekkes
$kommune = "Kristiansand";

// Sjekker fylkestilhørighet og skriver ut beskjeden
if (array_key_exists($kommune, $kommuner)) {
    $fylke = $kommuner[$kommune];
    echo "{$kommune} ligger i {$fylke} fylke.";
} else {
    echo "Kommune ikke funnet i listen.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 3-4</title>
</head>
<body>
    
</body>
</html>