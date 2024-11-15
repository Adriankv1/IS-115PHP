<?php
require_once 'oppgave6-2.php';

// Opprett to studenter
$student1 = new Student("Ole", "Hansen", "2000-01-15", "ST12345");
$student2 = new Student("Kari", "Olsen", "1999-05-20", "ST12346");

// Vis informasjon om studentene
echo "Student 1:\n" . $student1->visFullInfo() . "\n\n";
echo "Student 2:\n" . $student2->visFullInfo() . "\n\n";

// Slett studentene
unset($student1);
unset($student2);

// Vis slettede brukernavn
echo "Slettede brukernavn:\n";
print_r(Bruker::getSlettedeBrukere());
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 6-3</title>
</head>
<body>
    
</body>
</html>