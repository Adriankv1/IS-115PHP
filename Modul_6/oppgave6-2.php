<?php
require_once 'oppgave6-1.php';

class Student extends Bruker {
    private $studentnummer;

    public function __construct($fornavn, $etternavn, $fodselsdato, $studentnummer) {
        parent::__construct($fornavn, $etternavn, $fodselsdato);
        $this->studentnummer = $studentnummer;
    }

    // Overstyre visInfo-metoden
    public function visInfo() {
        return parent::visInfo() . ", Studentnummer: {$this->studentnummer}";
    }

    public function visFullInfo() {
        return "Navn: {$this->fornavn} {$this->etternavn}\n" .
               "Brukernavn: {$this->brukernavn}\n" .
               "Registrert: {$this->registreringsdato}\n" .
               "Studentnummer: {$this->studentnummer}";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 6-2</title>
</head>
<body>
    
</body>
</html>