<?php

class Car

{
    /**
     * @param string $brand
     */
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    /**
     * @param mixed $fuel
     */
    public function setFuel($fuel): void
    {
        $this->fuel = $fuel;
    }

    /**
     * @param mixed $speed
     */
    public function setSpeed($speed): void
    {
        $this->speed = $speed;
    }

    public function __construct()
    {
        $this->setBrand('');
        $this->setFuel('');
        $this->setSpeed('');
    }

    function fuelСonsumption($distance)
    {
        return $distance * ($this->fuel / 100);
    }
}

$volvo = new Car;
$porsche = new Car;
$ford = new Car;
$bmw = new Car;

$volvo->brand = 'Volvo';
$volvo->fuel = 8;
$volvo->speed = 110;

$porsche->brand = 'Porsche';
$porsche->fuel = 20;
$porsche->speed = 180;

$ford->setSpeed(200);
$ford->setFuel(40);

$bmw->setFuel(13.5);
$bmw->setBrand('BMW');

echo "Volvo spends {$volvo->fuelСonsumption(1000)} litres for 1000 km. <br>";
echo "Porsche spends {$porsche->fuelСonsumption(1000)} litres for 1000 km. <br>";
echo "Ford spends {$ford->fuelСonsumption(1000)} litres for 1000 km. <br>";
echo "BMW spends {$bmw->fuelСonsumption(1000)} litres for 1000 km. <br>";
