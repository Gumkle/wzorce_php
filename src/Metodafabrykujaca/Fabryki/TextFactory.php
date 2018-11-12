<?php

namespace Main\Metodafabrykujaca\Fabryki;

use Main\Metodafabrykujaca\Abstrakcja\Creator;
use Main\Metodafabrykujaca\Produkty\TextProduct;

class TextFactory extends Creator
{
    protected function factoryMethod()
    {
        $product = new TextProduct();
        return ($product->getProperties());
    }
}