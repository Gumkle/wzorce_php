<?php
/**
 * Created by PhpStorm.
 * User: dawid
 * Date: 25.11.18
 * Time: 22:14
 */

namespace Main\Prototyp\Protos;

use Main\Prototyp\Abstrakcja\IPrototype;

class FemaleProto extends IPrototype
{
    const GENDER = "SAMICA";
    public $fecundity;

    public function __construct()
    {
        $this->eyeColor = "czerwony";
        $this->wingBeat = 220;
        $this->unitEyes = 760;
    }

    public function __clone(){}
}