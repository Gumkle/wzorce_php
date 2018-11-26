<?php
/**
 * Created by PhpStorm.
 * User: dawid
 * Date: 26.11.18
 * Time: 21:26
 */

namespace Main\Adapter\MobileAndPCs\StarySystem\Abstrakcja;


interface IFormat
{
    public function formatCss();
    public function formatGraphics();
    public function horizontalLayout();
}