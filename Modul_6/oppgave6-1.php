<?php
// Klasse som definerer Bruker innhold
class Bruker {
    public $fornavn;
    public $etternavn;
    protected $brukernavn;
    protected $registreringsdato;
    private static $slettedeBrukere = [];

    // funksjon som bygger innholdet
    public function __construct($fornavn, $etternavn) {
        $this->fornavn = $fornavn;
        $this->etternavn = $etternavn;
        $this->registreringsdato = date('Y-m-d H:i:s');
        $this->brukernavn = $this->genererBrukernavn();
    }

    // funksjon som lager brukernavn ved å bruke 2 første fornvn og 2 første etternvn + tilfeldige tall
    protected function genererBrukernavn() {
        $tilfeldig = substr(str_shuffle('0123456789'), 0, 4);
        return strtolower(substr($this->fornavn, 0, 2) . substr($this->etternavn, 0, 2) . $tilfeldig);
    }

    // funksjon som viser info om en bruker
    public function visInfo() {
        return "Navn: {$this->fornavn} {$this->etternavn}";
    }

    // lager brukernavn
    public function getBrukernavn() {
        return $this->brukernavn;
    }

    // viser registreringsdato
    public function getRegistreringsdato() {
        return $this->registreringsdato;
    }

    // Sletter en bruker
    public function __destruct() {
        self::$slettedeBrukere[] = $this->brukernavn;
    }

    // henter slettede brukere
    public static function getSlettedeBrukere() {
        return self::$slettedeBrukere;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 6-1</title>
</head>
<body>
    
</body>
</html>
