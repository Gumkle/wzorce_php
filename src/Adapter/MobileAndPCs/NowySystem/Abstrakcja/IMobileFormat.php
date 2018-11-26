<?php
/**
 * Created by PhpStorm.
 * User: dawid
 * Date: 26.11.18
 * Time: 22:01
 */

namespace Main\Adapter\MobileAndPCs\NowySystem\Abstrakcja;


interface IMobileFormat
{
    public function formatCSS();
    public function formatGraphics();
    public function verticalLayout();
}