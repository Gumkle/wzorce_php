<?php
/**
 * Created by PhpStorm.
 * User: dawid
 * Date: 12.11.18
 * Time: 21:40
 */

namespace Main\Metodafabrykujaca\Fabryki;


use Main\Metodafabrykujaca\Abstrakcja\Creator;
use Main\Metodafabrykujaca\Abstrakcja\Product;

class CountryFactory extends Creator
{
    private $country;

    protected function factoryMethod(Product $product)
    {
        $this->country = $product;
        return ($this->country->getProperties());
    }
}