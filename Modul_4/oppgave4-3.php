<?php
// Brukerdata-matrise (startinformasjon)
$user_profile = array(
    "name" => "Ola Nordmann",
    "email" => "ola@example.com",
    "mobile" => "12345678"
);

// Definerer variabler for feilmeldinger og inputdata
$nameError = $emailError = $mobileError = "";
$name = $email = $mobile = "";
$changesMade = false;
$successMessage = "";

// Funksjon for å rense inputdata
function test_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

// Sjekk om skjemaet er sendt
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Hent eksisterende data
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $mobile = test_input($_POST["mobile"]);

    // Validering av navn. kan også fjernes hvis man ikke ønsker at det skal være obligatorisk ved endring.
//    if (empty($name)) {
    //     $nameError = "Navn er obligatorisk";
    // }

    // Validering av e-post, kan også fjerne (empty) hvis man ikke ønsker at det skal være obligatorisk ved endring.
    if (empty($email)) {
        $emailError = "E-post er obligatorisk";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = "Ugyldig e-postformat";
    }

    // Validering av mobilnummer, kan også fjerne (empty) hvis man ikke ønsker at det skal være obligatorisk ved endring.
    if (empty($mobile)) {
        $mobileError = "Mobilnummer er obligatorisk";
    } elseif (!preg_match("/^[0-9]{8}$/", $mobile)) {
        $mobileError = "Ugyldig mobilnummer, må være 8 siffer";
    }

    // Hvis det ikke er noen feilmeldinger, sjekk for endringer, kan fjerne empty dersom ønskes i gjen
    if (empty($nameError) && empty($emailError) && empty($mobileError)) {
        if ($name !== $user_profile["name"] || $email !== $user_profile["email"] || $mobile !== $user_profile["mobile"]) {
            // Oppdater profilen, det kunne ha blitt sjekket om det ble gjort ingen endringer hvis man hadde lagret dataen i en database.
            $user_profile["name"] = $name;
            $user_profile["email"] = $email;
            $user_profile["mobile"] = $mobile;
            $changesMade = true;
            $successMessage = "Brukerprofilen er oppdatert.";
        } else {
            $successMessage = "Ingen endringer ble gjort.";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 4-3</title>
</head>
<body>

<h2>Oppdater Brukerprofil</h2>

<!-- Skjema for visning og endring av brukerprofil -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Navn: <input type="text" name="name" value="<?php echo isset($name) ? $name : $user_profile['name']; ?>">
    <span style="color: red;">* <?php echo $nameError; ?></span><br><br>

    E-post: <input type="text" name="email" value="<?php echo isset($email) ? $email : $user_profile['email']; ?>">
    <span style="color: red;">* <?php echo $emailError; ?></span><br><br>

    Mobilnummer: <input type="text" name="mobile" value="<?php echo isset($mobile) ? $mobile : $user_profile['mobile']; ?>">
    <span style="color: red;">* <?php echo $mobileError; ?></span><br><br>

    <input type="submit" value="Oppdater profil">
</form>

<!-- Viser beskjed hvis profil ble oppdatert -->
<?php
if (!empty($successMessage)) {
    echo "<h3>$successMessage</h3>";
}
?>

</body>
</html>
