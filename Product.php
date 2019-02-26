<?php

namespace MandyLin\NewCart;

class Product
{
    public $name;  // string
    public $price;  // double

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}