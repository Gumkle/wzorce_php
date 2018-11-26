<?php

namespace Main\Adapter\MobileAndPCs;


use Main\Adapter\MobileAndPCs\Adapter\MobileAdapter;
use Main\Adapter\MobileAndPCs\NowySystem\Klasy\Mobile;

class Client
{
    private $mobile;
    private $mobileAdapter;

    public function __construct()
    {
        $this->mobile = new Mobile();
        $this->mobileAdapter = new MobileAdapter($this->mobile);
        $this->mobileAdapter->formatCss();
        $this->mobileAdapter->formatGraphics();
        $this->mobileAdapter->horizontalLayout();
        $this->mobile->closeHTML();
    }
}