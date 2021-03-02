<?php



class Triangle extends Figure
{
    private $a;
    private $b;
    private $c;

    const SIDES_COUNT = 3;

    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getArea($a, $b, $c)
    {
        $p = ($a + $b + $c) / 2;
        echo sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
    }

//    final public function infoAbout()
//    {
//        echo 'This is ' . get_class($this) . '. They have ' . self::SIDES_COUNT . ' sides and an area of ' . $this->getArea(6, 6, 6) . ' square centimeters. <br>';
//    }
}

class Square extends Figure
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    final public function infoAbout()
    {
        echo 'This is ' . get_class($this) . '. They have ' . self::SIDES_COUNT . ' sides and an area of ' . $this->getArea() . ' square centimeters. <br>';
    }

    private function getArea()
    {
        return $this->a * $this->a;
    }
}

$rect = new Rectangle();
$rect->infoAbout();

$triang = new Triangle(6, 6, 6);
//$triang->infoAbout();
$triang->getArea();

$squar = new Square(10);
$squar->infoAbout();