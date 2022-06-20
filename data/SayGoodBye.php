<?php

namespace Data\Traits;

trait SayGoodBye
{
    public function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good Bye" . PHP_EOL;
        } else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait SayHello
{
    public function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait HasName
{
    public string $name;
}

//Abstract Function di dalam Trait
trait CanRun
{
    public abstract function run(): void;
}

class ParentPerson
{
    public function sayGoodBye(?string $name): void
    {
        echo "Good bye in Parten Person" . PHP_EOL;
    }

    public function sayHello(?string $name): void
    {
        echo "Hello in Parent Person" . PHP_EOL;
    }
}

class Person
{
    use SayGoodBye, SayHello, HasName, CanRun;
    // use All;
    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }

    // public function goodBye(?string $name): void
    // {
    //     echo "Good bye in Person" . PHP_EOL;
    // }

    // public function hello(?string $name): void
    // {
    //     echo "Hello in Person" . PHP_EOL;
    // }
}

trait All
{
    use SayGoodBye, SayHello, HasName, CanRun {
        // bisa override
        // sayHello as private;
        // sayGoodBye as private;
    }
}
