<?php
/**
 * Created by PhpStorm.
 * User: dawid
 * Date: 26.11.18
 * Time: 18:33
 */

namespace Main\Adapter\Currency\Klasy;


class EuroCalc
{
    private $euro;
    private $product;
    private $service;
    public $rate=1;

    public function requestCalc($productNow, $serviceNow)
    {
        $this->product = $productNow;
        $this->service = $serviceNow;
        $this->euro = $this->product + $this->service;
        return $this->requestTotal();
    }

    public function requestTotal()
    {
        $this->euro *= $this->rate;
        return $this->euro;
    }
}