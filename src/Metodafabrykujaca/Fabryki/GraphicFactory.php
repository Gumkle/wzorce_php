<?php

namespace Main\Metodafabrykujaca\Fabryki;

use Main\Metodafabrykujaca\Abstrakcja\Creator;
use Main\Metodafabrykujaca\Produkty\GraphicProduct;

class GraphicFactory extends Creator
{
    protected function factoryMethod()
    {
        $product = new GraphicProduct();
        return ($product->getProperties());
    }
}