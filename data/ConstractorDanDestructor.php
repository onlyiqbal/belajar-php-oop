<?php

class ConstructorDanDestructor
{
    const AUTHOR = "iqbal";
    var string $name; // Type Declaration 
    var ?string $address; // Nullable
    var $country = "Arab"; //Default Value
    function __construct(string $name, ?string $address)
    {
        $this->name = $name;
        $this->address = $address;
    }
    function __destruct()
    {
        echo "Object desctructor is destroyed" . PHP_EOL;
    }
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
