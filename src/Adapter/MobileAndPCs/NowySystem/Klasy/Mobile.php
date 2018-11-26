<?php
/**
 * Created by PhpStorm.
 * User: dawid
 * Date: 26.11.18
 * Time: 22:02
 */

namespace Main\Adapter\MobileAndPCs\NowySystem\Klasy;


use Main\Adapter\MobileAndPCs\NowySystem\Abstrakcja\IMobileFormat;

class Mobile implements IMobileFormat
{
    private $head = "<!doctype html><html><head>";
    private $headClose = "<meta charset='UTF-8>
    <title>Urządzenia mobilne</title></head><body>";

    private $cap = "</body></html>";
    private $sampleText;

    public function formatCss()
    {
        echo $this->head;
        echo "<link rel='stylesheet' href='mobile.css'>";
        echo $this->headClose;
        echo "<h1>Witajcie wszyscy!</h1>";
    }

    public function formatGraphics()
    {
        echo "<img class='pixRight' src='pix/fallRiver960.png' width=device-width height=device-height alt='river'>";
    }

    public function verticalLayout()
    {
        $textFile = "text/lorem.txt";
        $openText = fopen($textFile, 'r');
        $textInfo = fread($openText, filesize($textFile));
        fclose($openText);
        $this->sampleText = $textInfo;
        echo "<div>".$this->sampleText."</div>";
        echo "<div>" .$this->sampleText. "</div>";

    }

    public function closeHTML()
    {
        echo $this->cap;
    }
}