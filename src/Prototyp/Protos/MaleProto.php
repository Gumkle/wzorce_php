<?php
/**
 * Created by PhpStorm.
 * User: dawid
 * Date: 25.11.18
 * Time: 20:02
 */

namespace Main\Prototyp\Protos;


use Main\Prototyp\Abstrakcja\IPrototype;

class MaleProto extends IPrototype
{
    const GENDER = "SAMIEC";
    public $mated;

    public function __construct()
    {
        $this->eyeColor = "czerwony";
        $this->wingBeat = 220;
        $this->unitEyes = 760;
    }

    public function __clone(){}
}