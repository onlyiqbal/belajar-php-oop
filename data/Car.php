<?php

namespace Data;

interface HasBrand
{
    function getBrand(): string;
}

interface IsMaintenance
{
    function isMaintenance(): bool;
}
// Pewarisan Interface,bisa lebih dari satu interface
interface Car extends HasBrand
{
    const DRIVER = "iqbal (driver)";
    function drive(): void;
    function getTire(): int;
}

// Class yang implements dari interface harus  mengimplementasikan method yang ada  di interface
class Avanza implements Car, IsMaintenance
{
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 5;
    }

    public function getBrand(): string
    {
        return "Toyota" . PHP_EOL;
    }

    public function isMaintenance(): bool
    {
        return true;
    }
}
