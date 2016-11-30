<?php
class Car {
    public $color;
    public $brand;
    public $maxSpeed;

public function __construct($color,$brand,$maxSpeed){
$this->color=$color;
$this->brand=$brand;
$this->maxSpeed=$maxSpeed;
}

public function forCar($distance)
{
    $time = $distance / $this->maxSpeed;
    return $time;
}

}
$car1 = new Car('White','BMW',240);

echo $car1->forCar(1000);
/*
mek@ mtnuma u zartexen@ goxanuma....heto gtnum em kaktusneri mej....2 hoqia padazrivat anum.....vonc haskacan ova?
zajnagrelu pah@
hjuranocum mek@ tuk tuka talis

*/
?>