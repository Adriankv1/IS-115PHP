<?php
$text = '<p>Viken</p> <a href>Johansen</a>';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 2-2</title>
</head>
<body>
    <a href=index.php>Gå tilbake</a>
    <p><?php echo strip_tags($text);?></p> 
    <p><?php echo $text;?></p>
</body>
</html>