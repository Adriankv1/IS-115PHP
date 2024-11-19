<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 6-2</title>
</head>
<body>
    
<?php
// henter informasjon fra første oppgave
require_once 'oppgave6-1.php';

// arv av klassen bruker fra 6-1
class Motelbruker extends Bruker {
    private $brukernummer;

    public function __construct($fornavn, $etternavn, $brukernummer) {
        parent::__construct($fornavn, $etternavn);
        $this->brukernummer = $brukernummer;
    }

    // Overstyre visInfo-metoden
    public function visInfo() {
        return parent::visInfo() . ", Brukernummer: {$this->brukernummer}";
    }

    // funksjon som viser full info om en bruker
    public function visFullInfo() {
        return "Navn: {$this->fornavn} {$this->etternavn}\n" .
               "Brukernavn: {$this->brukernavn}\n" .
               "Registrert: {$this->registreringsdato}\n" .
               "Brukernummer: {$this->brukernummer}<br>";
    }
}
?>

</body>
</html>

