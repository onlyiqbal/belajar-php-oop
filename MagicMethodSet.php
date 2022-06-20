<?php

class Produk
{
    public function __set($name, $value)
    {
        echo "Properties '$name' tidak terdefinisi dengan value '$value' ";
    }
}

$laptop = new Produk();
echo $laptop->merk = "hp" . PHP_EOL;
