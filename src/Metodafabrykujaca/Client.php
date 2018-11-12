<?php

namespace Main\Metodafabrykujaca;


use Main\Metodafabrykujaca\Fabryki\CountryFactory;
use Main\Metodafabrykujaca\Fabryki\GraphicFactory;
use Main\Metodafabrykujaca\Fabryki\TextFactory;
use Main\Metodafabrykujaca\Produkty\KrygyzstanProduct;

class Client
{
    private $countryFactory;

    public function __construct()
    {
        $this->countryFactory = new CountryFactory();
        echo $this->countryFactory->doFactory(new KrygyzstanProduct()). "<br/>";
    }
}