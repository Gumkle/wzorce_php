<?php

namespace Main\Metodafabrykujaca\Produkty;


use Main\Metodafabrykujaca\Abstrakcja\Product;
use Main\Metodafabrykujaca\Helper\FormatHelper;

class KrygyzstanProduct implements Product
{
    private $mfgProduct;
    private $formatHelper;

    public function getProperties()
    {
        $this->formatHelper = new FormatHelper();
        $this->mfgProduct = $this->formatHelper->addTop();
        $this->mfgProduct .= <<<KRYGYZSTAN
        <img src="kyrgyzstan.jpg">
        <header>Kyrgyzstan</header>
        <p>Lorem ipsum chuje muje</p>
KRYGYZSTAN;
        $this->mfgProduct .= $this->formatHelper->closeUp();
        return $this->mfgProduct;

    }
}