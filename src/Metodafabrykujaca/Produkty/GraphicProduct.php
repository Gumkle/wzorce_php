<?php

namespace Main\Metodafabrykujaca\Produkty;


use Main\Metodafabrykujaca\Abstrakcja\Product;

class GraphicProduct implements Product
{
    private $mfgProduct;
    public function getProperties()
    {
        $this->mfgProduct = "<!doctype html><html><head><meta charset='UTF-8' />";
        $this->mfgProduct .= "<title>Fabryka map</title>";
        $this->mfgProduct .= "</head><body>";
        $this->mfgProduct .= "<img src='Mali.png' width='500' height='500' />";
        $this->mfgProduct .= "</body><html/>";
        return $this->mfgProduct;
    }
}