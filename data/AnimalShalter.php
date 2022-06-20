<?php

namespace Data;

require_once "Animal.php";

interface AnimalShalter
{
    function adopt(string $name): Animal;
}

class CatShalter implements AnimalShalter
{
    function adopt(string $name): Cat
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}

class DogShalter implements AnimalShalter
{
    function adopt(string $name): Dog
    {
        $dog = new Dog;
        $dog->name = $name;
        return $dog;
    }
}
