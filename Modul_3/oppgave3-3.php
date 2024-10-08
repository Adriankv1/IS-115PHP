<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 3-3</title>
</head>
<body>
    
    <!-- Skjema for å legge inn startsaldo, rente og antall år -->
    <form method="post">
        <label for="start_saldo">Startsaldo (S0):</label>
        <input type="number" name="start_saldo" id="start_saldo" step="0.01" required><br><br>

        <label for="rente">Årlig Rente (i prosent):</label>
        <input type="number" name="rente" id="rente" step="0.01" required><br><br>

        <label for="antall_aar">Antall År:</label>
        <input type="number" name="antall_aar" id="antall_aar" required><br><br>

        <input type="submit" value="Beregn">
    </form>

    <?php
    // Sjekk om skjemaet er sendt inn
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Hent verdier fra skjemaet
        $start_saldo = (float) $_POST['start_saldo'];
        $rente = (float) $_POST['rente'];
        $antall_aar = (int) $_POST['antall_aar'];

        // Konverter rente fra prosent til desimal
        $rente = $rente / 100;

        // Variabel for nåværende saldo, starter med startsaldo
        $saldo = $start_saldo;

        echo "<h2>Resultater</h2>";
        echo "Startsaldo: " . number_format($start_saldo, 2) . " kr<br>";
        echo "Årlig rente: " . ($rente * 100) . "%<br>";
        echo "Antall år: $antall_aar<br><br>";

        // Løkke for å beregne saldo for hvert år
        for ($aar = 1; $aar <= $antall_aar; $aar++) {
            // Beregn ny saldo for inneværende år
            $saldo = $saldo + ($saldo * $rente);

            // Skriv ut ny saldo for hvert år
            echo "Saldo etter år $aar: " . number_format($saldo, 2) . " kr<br>";
        }

        // Til slutt skriv ut slutt-saldoen etter n år
        echo "<br><strong>Etter $antall_aar år er den totale
         saldoen: " . number_format($saldo, 2) . 
         " kr</strong><br>";
    }
    ?>

</body>
</html>
