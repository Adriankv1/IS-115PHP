<?php
    $alder = 22;
    $navn = "Adrian Viken";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 3</title>
</head>
<body>
    <p><a href="index.php">Gå tilbake</a></p>
    
    <p><?php echo "$navn er $alder år gammel."; ?></p>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Navn</th>
            <th>Alder</th>
        </tr>
        <tr>
            <td><?php echo $navn; ?></td>
            <td><?php echo $alder; ?></td>
        </tr>
    </table>

    <ol>
        <li>Navn: <?php echo $navn; ?></li>
        <li>Alder: <?php echo $alder; ?></li>
    </ol>

    <ul>
        <li>Navn: <?php echo $navn; ?></li>
        <li>Alder: <?php echo $alder; ?></li>
    </ul>
</body>
</html>