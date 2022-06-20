<?php

interface HelloWorld
{
    function sayHello(): void;
}

$hellowordl = new class("budi") implements HelloWorld
{
    public string $name;

    // Constractor di Anonymous Class
    public function __construct(?string $name)
    {
        $this->name = $name;
    }

    public function sayHello(): void
    {
        echo "Helo World $this->name" . PHP_EOL;
    }
};

$hellowordl->sayHello();
