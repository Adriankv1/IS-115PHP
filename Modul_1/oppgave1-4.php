<?php 
    $tall1 = 7;
    $tall2 = 11;

    $sum = $tall1 + $tall2;
    $gjennomsnitt = $sum / 2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 4</title>
</head>
<body>
<p><a href="index.php">Gå tilbake</a></p> 

<p>Summen av <?php echo $tall1; ?> og 
<?php echo $tall2; ?> er <?php echo $sum; ?>.</p>

<p>Gjennomsnittet av <?php echo $tall1; ?> og 
<?php echo $tall2; ?> er <?php echo $gjennomsnitt; ?>.</p>
</body>
</html>