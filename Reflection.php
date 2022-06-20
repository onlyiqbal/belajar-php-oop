<?php
require_once "Exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "Helper/ValidateUtil.php";

$request = new LoginRequest();
$request->username = null;
$request->password = null;

//ValidationUtil::validate($request);
ValidationUtil::validateReflection($request);
