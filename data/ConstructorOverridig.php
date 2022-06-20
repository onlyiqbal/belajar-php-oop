<?php

class ConstructorOverriding
{
    var $name = "joko";
    var $title;

    public function __construct(string $name, string $title)
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello($name): void
    {
        echo "Hi $name,my name is Manager $this->name" . PHP_EOL;
    }
}

class VicePresidentConstructorOverriding extends ConstructorOverriding
{
    public function __construct(string $name = "")
    {
        //tidak wajib,tapi direkomendasikan
        parent::__construct($name, "VP");
    }

    function sayHello($name): void   // Function Overriding (Deklarasi ulang function di class child)
    {
        echo "Hi $name,my name is VP $this->name" . PHP_EOL;
    }
}
