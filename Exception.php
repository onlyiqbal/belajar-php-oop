<?php
require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "Helper/Validation.php";

$loginRequest = new LoginRequest();
// $loginRequest->username = "iqbal";
// $loginRequest->password = "qwerty";

try {
    validateLoginRequest($loginRequest);
    echo "VALID" . PHP_EOL;
    echo "username is: " . $loginRequest->username . PHP_EOL;
    echo "password is: " . $loginRequest->password . PHP_EOL;
} catch (ValidationException $exception) {
    echo "Validation Error : " . $exception->getMessage() . PHP_EOL;
}