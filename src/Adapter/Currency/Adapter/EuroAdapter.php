<?php
/**
 * Created by PhpStorm.
 * User: dawid
 * Date: 26.11.18
 * Time: 18:37
 */

namespace Main\Adapter\Currency\Adapter;


use Main\Adapter\Currency\Abstrakcja\ITarget;
use Main\Adapter\Currency\Klasy\EuroCalc;

class EuroAdapter extends EuroCalc implements ITarget
{
    public function __construct()
    {
        $this->requester();
    }

    public function requester()
    {
        $this->rate = .8111;
        return $this->rate;
    }
}