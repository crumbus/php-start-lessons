<?php

class Rectangle extends Figure
{
    public function __construct()
    {
        $this->a = mt_rand(1, 10);
        $this->b = mt_rand(1, 10);
    }

    private function getArea()
    {
        return $this->a * $this->b;
    }

    final public function infoAbout()
    {
        echo 'This is ' . get_class($this) . '. They have ' . self::SIDES_COUNT . ' sides and an area of ' . $this->getArea() . ' square centimeters. <br>';
    }
}
