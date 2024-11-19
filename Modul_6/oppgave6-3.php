<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 6-3</title>
</head>
<body>

<?php
// henter informasjon fra andre oppgave
require_once 'oppgave6-2.php';

// Opprett to brukere
$Motelbruker1 = new Motelbruker("Ole", "Hansen", "MB12345");
$Motelbruker2 = new Motelbruker("Kari", "Olsen", "MB12346");

// Vis informasjon om brukeren
echo "Bruker 1:\n" . $Motelbruker1->visFullInfo() . "\n\n";
echo "Bruker 2:\n" . $Motelbruker2->visFullInfo() . "\n\n";

// Slett brukerne
unset($Motelbruker1);
unset($Motelbruker2);

// Vis slettede brukernavn
echo "Slettede brukernavn:\n";
print_r(Bruker::getSlettedeBrukere());
?>

</body>
</html>


