<?php

namespace Main\Metodafabrykujaca\Helper;


class FormatHelper
{
    private $topper;
    private $bottom;

    public function addTop()
    {
        $this->topper = "<!doctype html><html><head>
            <meta charset='UTF-8'>
            <title>Fabryka map</title>
        </head><body>";

        return $this->topper;
    }

    public function closeUp()
    {
        $this->bottom = "</body></html>";
        return $this->bottom;
    }
}