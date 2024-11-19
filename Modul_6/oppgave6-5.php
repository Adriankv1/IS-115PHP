<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oppgave 6-5</title>
</head>
<body>
    
<?php

class Validator {
    public function validatePassword($password) {
        if (strlen($password) < 9) {
            return "Password must be at least 9 characters long.";
        }
        if (!preg_match('/[A-Z]/', $password)) {
            return "Password must contain at least one uppercase letter.";
        }
        if (!preg_match('/\d.*\d/', $password)) {
            return "Password must contain at least two numbers.";
        }
        if (!preg_match('/[\W_]/', $password)) {
            return "Password must contain at least one special character.";
        }
        return "Password is valid.";
    }

    public function validateEmail($email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return "Invalid email format.";
        }
        return "Email is valid.";
    }

    public function validateMobile($mobile) {
        if (!preg_match('/^(\+47)?[49]\d{7}$/', $mobile)) {
            return "Invalid Norwegian mobile number.";
        }
        return "Mobile number is valid.";
    }
}

$validator = new Validator();

$password = "Test@1234";
$email = "example@example.com";
$mobile = "41234567";

echo "Password validation: " . $validator->validatePassword($password) . "<br>";
echo "Email validation: " . $validator->validateEmail($email) . "<br>";
echo "Mobile validation: " . $validator->validateMobile($mobile) . "<br><br>";

$password2 = "test1234";
$email2 = "exampleexample.com";
$mobile2 = "12345678";

echo "Password validation: " . $validator->validatePassword($password2) . "<br>";
echo "Email validation: " . $validator->validateEmail($email2) . "<br>";
echo "Mobile validation: " . $validator->validateMobile($mobile2) . "<br>";
?>

</body>
</html>