<?php

namespace Data;

class Shape
{
    public function getCorner()
    {
        return 0;
    }
}

class Rectangle extends Shape
{
    public function getCorner()
    {
        return 4;
    }
    public function getCornerParent()
    {
        return parent::getCorner(); // Keyword Parent
    }
}
