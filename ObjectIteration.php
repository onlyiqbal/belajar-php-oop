<?php


class Data implements IteratorAggregate
{
    var $first = "first";
    public string $second = "second";
    private $third = "thirt";
    protected $forth = "forth";

    public function getIterator()
    {
        $array = [
            "first" => $this->first,
            "second" => $this->second,
            "third" => $this->third,
            "forth" => $this->forth,
        ];
        return new ArrayIterator($array);
    }

    // Menggunakan Generator

    // public function getIterator()
    // {
    //     yield "first" => $this->first;
    //     yield "second" => $this->second;
    //     yield "third" => $this->third;
    //     yield "forth" => $this->forth;
    // }
}

$data = new Data();

foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}
