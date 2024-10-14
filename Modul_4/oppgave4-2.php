<?php
// Definerer variabler for feilmeldinger og inputdata
$nameError = $emailError = $mobileError = "";
$name = $email = $mobile = "";
$user_data = [];

// Funksjon for å trimme og rense inputdata
function test_input($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sjekker og validerer navn
    if (empty($_POST["name"])) {
        $nameError = "Navn er obligatorisk";
    } else {
        $name = test_input($_POST["name"]);
    }

    // Sjekker og validerer e-post
    if (empty($_POST["email"])) {
        $emailError = "E-post er obligatorisk";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $emailError = "Ugyldig e-postformat";
    } else {
        $email = test_input($_POST["email"]);
    }

    // Sjekker og validerer mobilnummer
    if (empty($_POST["mobile"])) {
        $mobileError = "Mobilnummer er obligatorisk";
    } elseif (!preg_match("/^[0-9]{8}$/", $_POST["mobile"])) {
        $mobileError = "Ugyldig mobilnummer, må være 8 siffer";
    } else {
        $mobile = test_input($_POST["mobile"]);
    }

    // Hvis det ikke er noen feilmeldinger, lagrer vi dataene i en matrise
    if (empty($nameError) && empty($emailError) && empty($mobileError)) {
        $user_data = array(
            "Navn" => $name,
            "E-post" => $email,
            "Mobilnummer" => $mobile
        );
        echo "<h3>Ny bruker er registrert:</h3>";
        echo "<ul>";
        foreach ($user_data as $key => $value) {
            echo "<li>$key: $value</li>";
        }
        echo "</ul>";
    }
}
?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 4-2</title>
</head>
<body>

<h2>Registrer ny bruker</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Navn: <input type="text" name="name" value="<?php echo $name; ?>">
    <span style="color: red;">* <?php echo $nameError; ?></span><br><br>

    E-post: <input type="text" name="email" value="<?php echo $email; ?>">
    <span style="color: red;">* <?php echo $emailError; ?></span><br><br>

    Mobilnummer: <input type="text" name="mobile" value="<?php echo $mobile; ?>">
    <span style="color: red;">* <?php echo $mobileError; ?></span><br><br>

    <input type="submit" value="Registrer">
</form>

</body>
</html>
