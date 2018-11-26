<?php
/**
 * Created by PhpStorm.
 * User: dawid
 * Date: 26.11.18
 * Time: 22:11
 */

namespace Main\Adapter\MobileAndPCs\Adapter;


use Main\Adapter\MobileAndPCs\NowySystem\Abstrakcja\IMobileFormat;
use Main\Adapter\MobileAndPCs\StarySystem\Abstrakcja\IFormat;

class MobileAdapter implements IFormat
{
    private $mobile;

    public function __construct(IMobileFormat $mobileNow)
    {
        $this->mobile = $mobileNow;
    }

    public function formatCss()
    {
        $this->mobile->formatCSS();
    }

    public function formatGraphics()
    {
        $this->mobile->formatGraphics();
    }

    public function horizontalLayout()
    {
        $this->mobile->verticalLayout();
    }
}