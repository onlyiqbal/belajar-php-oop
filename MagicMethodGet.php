<?php

class Produk
{
    public function __get($name)
    {
        echo "Maaf properties $name tidak tersedia" . PHP_EOL;
    }
}

$televisi = new Produk();
echo $televisi->merk . PHP_EOL;
