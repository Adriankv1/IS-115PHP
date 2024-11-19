<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 6-4</title>
</head>
<body>
    
<?php 

// Klasse som validerer e-post ved bruk av filter_var
    class Validering {
        public function validateEmail($email) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return "$email er en gyldig e-post.";
            } else {
                return "$email er ikke en gyldig e-post.";
            }
        }
    }

    // Test av validering av e-post
    $validator = new Validering();
    $email = "test@example.com";
    $email2 = "testexample.com";
    $email3 = "test@examplecom";

    echo $validator->validateEmail($email) . "<br>";
    echo $validator->validateEmail($email2) . "<br>";
    echo $validator->validateEmail($email3) . "<br>";

?>

</body>
</html>