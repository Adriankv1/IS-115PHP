<?php
$dato = date("Y-m-d");

$hendelse_dato = "2024-09-28"; 


if ($dato > $hendelse_dato) {
    echo "Fotballkampen har allerede vært.";
} elseif ($dato == $hendelse_dato) {
    echo "Fotballkampen er i dag.";
} else {
    echo "Fotballkampen har ikke vært enda.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 3-1</title>
</head>
<body>
    
</body>
</html>