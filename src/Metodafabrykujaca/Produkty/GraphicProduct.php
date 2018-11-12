<?php

namespace Main\Metodafabrykujaca\Produkty;


use Main\Metodafabrykujaca\Abstrakcja\Product;

class GraphicProduct implements Product
{
    private $mfgProduct;
    public function getProperties()
    {
        $this->mfgProduct = "To jest grafika <3";
        return $this->mfgProduct;
    }
}