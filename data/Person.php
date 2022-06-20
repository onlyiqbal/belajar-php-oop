<?php

class Person
{
    const AUTHOR = "iqbal";
    var string $name; // Type Declaration 
    var ?string $address; // Nullable
    var $country = "Arab"; //Default Value
    function greet($name)
    {
        echo "Hello $name" . PHP_EOL;
    }
    function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi my name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name,my name is $this->name" . PHP_EOL;
        }
    }
    function info()
    {
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    }
}
