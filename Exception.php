<?php
require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "Helper/Validation.php";

$loginRequest = new LoginRequest();

// validateLoginRequest($loginRequest);
// echo "VALID" . PHP_EOL;

try {
    validateLoginRequest($loginRequest);
    echo "VALID" . PHP_EOL;
} catch (ValidationException | Exception $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;
    
    //Debug Exception
    print_r($exception->getTrace());
    echo $exception->getTraceAsString();
} finally {
    echo "Error atau tidak tetep dieksekusi";
}
