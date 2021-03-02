<?php

class Figure
{
    public $area;
    public $color;

    protected const SIDES_COUNT = 4;

    public function infoAbout()
    {
        echo 'Это геометрическая фигура!';
    }
}
