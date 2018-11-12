<?php

namespace Main\Metodafabrykujaca\Produkty;


use Main\Metodafabrykujaca\Abstrakcja\Product;

class TextProduct implements Product
{
    private $mfgProduct;
    public function getProperties()
    {
        $this->mfgProduct = "To jest tekst";
        return $this->mfgProduct;
    }
}