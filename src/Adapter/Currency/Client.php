<?php
/**
 * Created by PhpStorm.
 * User: dawid
 * Date: 26.11.18
 * Time: 18:53
 */

namespace Main\Adapter\Currency;


use Main\Adapter\Currency\Abstrakcja\ITarget;
use Main\Adapter\Currency\Adapter\EuroAdapter;
use Main\Adapter\Currency\Klasy\DolarCalc;

class Client
{
    private $requestNow;
    private $dollarRequest;

    public function __construct()
    {
        $this->requestNow = new EuroAdapter();
        $this->dollarRequest = new DolarCalc();

        echo "Euro: " . $this->makeAdapterRequest($this->requestNow) . "<br/>";

        echo "Dolary: ". $this->makeDollarRequest($this->dollarRequest);
    }

    private function makeAdapterRequest(ITarget $req)
    {
        return $req->requestCalc(40, 50);
    }

    private function makeDollarRequest(DolarCalc $req)
    {
        return $req->requestCalc(40, 50);
    }
}