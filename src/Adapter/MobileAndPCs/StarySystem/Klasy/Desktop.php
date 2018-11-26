<?php
/**
 * Created by PhpStorm.
 * User: dawid
 * Date: 26.11.18
 * Time: 21:27
 */

namespace Main\Adapter\MobileAndPCs\StarySystem\Klasy;


use Main\Adapter\MobileAndPCs\StarySystem\Abstrakcja\IFormat;

class Desktop implements IFormat
{
    private $head = "<!doctype html><html><head>";
    private $headClose = "<meta charset='UTF-8>
    <title>Komputery osobiste</title></head><body>";

    private $cap = "</body></html>";
    private $sampleText;

    public function formatCss()
    {
        echo $this->head;
        echo "<link rel='stylesheet' href='desktop.css'>";
        echo $this->headClose;
        echo "<h1>Witajcie wszyscy!</h1>";
    }

    public function formatGraphics()
    {
        echo "<img class='pixRight' src='pix/fallRiver720.png' width='720' height='480' alt='river'>";
    }

    public function horizontalLayout()
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