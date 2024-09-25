<?php
//https://www.php.net/manual/en/function.str-shuffle.php 

function genererPassord($lengde = 8) {
    // Tegnsett som skal brukes for å generere passord
    $småBokstaver = 'abcdefghijklmnopqrstuvwxyz';
    $storeBokstaver = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $tall = '0123456789';

    // Passordet må inneholde minst én stor bokstav, én liten bokstav og ett tall
    $passord = '';
        $passord .= $storeBokstaver[rand(0, strlen($storeBokstaver) - 1)];
        $passord .= $småBokstaver[rand(0, strlen($småBokstaver) - 1)];
        $passord .= $tall[rand(0, strlen($tall) - 1)];

    // Fyll passordet med tilfeldige tegn
    $alleTegn = $småBokstaver . $storeBokstaver . $tall;
    for ($i = 3; $i < $lengde; $i++) {
        $passord .= $alleTegn[rand(0, strlen($alleTegn) - 1)];
    }

    // Bland passordet slik at de første tegnene er tilfeldige
    $passord = str_shuffle($passord);

    return $passord;
}

// Generer et passord
$tilfeldigPassord = genererPassord();

//https://www.php.net/manual/en/function.preg-match.php
//testing for å sjekke om passord inneholder 1 liten, 1 stor og ett tall
function testPasswordGenerator() {
    $antallTester = 10;

    for ($i = 0; $i < $antallTester; $i++) {
        $passord = genererPassord(8);

        $harLitenBokstav = preg_match('/[a-z]/', $passord);
        $harStorBokstav = preg_match('/[A-Z]/', $passord);
        $harTall = preg_match('/\d/', $passord);
        $riktigLengde = strlen($passord) === 8;

        echo "<br> Passord: $passord, Liten: $harLitenBokstav, Stor: $harStorBokstav, Tall: $harTall, Lengde: $riktigLengde";
        
}
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href=index.php>Gå tilbake</a>

    <p><?php echo $tilfeldigPassord . "<br> TESTING"; 
    testPasswordGenerator();?></p>
</body>
</html>
