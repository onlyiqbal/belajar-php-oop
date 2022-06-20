<?php

class Zero
{
    private array $properties = [];

    //Properties Overloading
    public function __set($name, $value)
    {
        $this->properties[$name] = $value;
    }

    public function __get($name)
    {
        return $this->properties[$name];
    }

    public function __isset($name)
    {
        return isset($this->properties[$name]);
    }

    public function __unset($name)
    {
        unset($this->properties[$name]);
    }


    // Function Overloading
    public function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call function $name with argument $join" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "Call staitic function $name with argument $join" . PHP_EOL;
    }
}

$zero = new Zero();
$zero->firstName = "iqbal";
$zero->middleName = "maulana";
$zero->lastName = "menggala";

echo "FirstName : $zero->firstName" . PHP_EOL;
echo "MiddleName : $zero->middleName" . PHP_EOL;
echo "LastName : $zero->lastName" . PHP_EOL;

// Method biasa
$zero->sayHello("iqbal", "menggala");
// Static method
Zero::greet("iqbal", "maulana");
