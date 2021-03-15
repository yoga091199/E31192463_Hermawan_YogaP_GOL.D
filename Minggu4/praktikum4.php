<?php
abstract class Car{
    protected $tankVolume;
    
    public function setTankVolume($volume){
        $this->tankVolume = $volume;
    }
    
    abstract public function calcNumMilesOnFullTank();
}

//Praktikum Override
class Car{
    final public function hello(){
        return "beep";
    }
}

class sportsCar extends Car{
    public function hello(){
        return "Hallo";
    }
}

$sportsCar1 = new sportsCar();
echo $sportsCar1->hello();
?>