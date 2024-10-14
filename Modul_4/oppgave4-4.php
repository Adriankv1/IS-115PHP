<?php
// Oppretter en multidimensjonal matrise med informasjon om flere brukere
$users = array(
    array(
        "name" => "Ola Nordmann",
        "email" => "ola@example.com",
        "mobile" => "12345678",
        "role" => "Administrator"
    ),
    array(
        "name" => "Kari Nordmann",
        "email" => "kari@example.com",
        "mobile" => "87654321",
        "role" => "Bruker"
    ),
    array(
        "name" => "Per Hansen",
        "email" => "per@example.com",
        "mobile" => "11223344",
        "role" => "Bruker"
    ),
    array(
        "name" => "Lise Berg",
        "email" => "lise@example.com",
        "mobile" => "44332211",
        "role" => "Moderator"
    )
);

?>

<!DOCTYPE html>
<html lang="no">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 4-4</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Brukeroversikt</h2>

<!-- Lager en tabell for å vise brukerinformasjon -->
<table>
    <tr>
        <th>Navn</th>
        <th>E-post</th>
        <th>Mobilnummer</th>
        <th>Rolle</th>
    </tr>

    <?php
    // Går gjennom matrisen og skriver ut hver brukers informasjon i tabellen
    foreach ($users as $user) {
        echo "<tr>";
        echo "<td>" . $user["name"] . "</td>";
        echo "<td>" . $user["email"] . "</td>";
        echo "<td>" . $user["mobile"] . "</td>";
        echo "<td>" . $user["role"] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
