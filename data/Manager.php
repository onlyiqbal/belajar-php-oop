<?php

class Manager
{
    var $name;

    function sayHello($name): void
    {
        echo "Hi $name,my name is Manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    function sayHello($name): void   // Function Overriding (Deklarasi ulang function di class child)
    {
        echo "Hi $name,my name is VP $this->name" . PHP_EOL;
    }
}
