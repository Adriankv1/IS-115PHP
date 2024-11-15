<?php
class Bruker {
    public $fornavn;
    public $etternavn;
    protected $brukernavn;
    public $fodselsdato;
    protected $registreringsdato;
    private static $slettedeBrukere = [];

    public function __construct($fornavn, $etternavn, $fodselsdato) {
        $this->fornavn = $fornavn;
        $this->etternavn = $etternavn;
        $this->fodselsdato = $fodselsdato;
        $this->registreringsdato = date('Y-m-d H:i:s');
        $this->brukernavn = $this->genererBrukernavn();
    }

    protected function genererBrukernavn() {
        $tilfeldig = substr(str_shuffle('0123456789'), 0, 4);
        return strtolower(substr($this->fornavn, 0, 2) . substr($this->etternavn, 0, 2) . $tilfeldig);
    }

    public function visInfo() {
        return "Navn: {$this->fornavn} {$this->etternavn}, Født: {$this->fodselsdato}";
    }

    public function getBrukernavn() {
        return $this->brukernavn;
    }

    public function getRegistreringsdato() {
        return $this->registreringsdato;
    }

    public function __destruct() {
        self::$slettedeBrukere[] = $this->brukernavn;
    }

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
