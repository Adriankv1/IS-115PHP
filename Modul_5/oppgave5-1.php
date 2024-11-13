<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 5-1</title>
</head>
<body>
    <H1>Om ønsket: Se til linket PDF fil i mappen Modul 5 - Filstruktur.pdf</H1>
</body>
</html>
<!-- Legger til en "filviewer" for googledocs! -->
<?php
$googleDocsUrl = "https://docs.google.com/document/d/1QoUKKN6yiX79WFc7JV8tyz01FNiTWDGLD5rhfFq6fU0/edit?tab=t.0" . "&embedded=true";
?>

<iframe src="<?php echo $googleDocsUrl; ?>"
        width="100%"
        height="600px"
        style="border: none;">
</iframe>