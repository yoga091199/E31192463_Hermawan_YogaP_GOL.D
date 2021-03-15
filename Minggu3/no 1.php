<?php
class Car{
    public $model;
    
    public function getModel(){
        return "The car model is ".$this->model;
    }
}
$mercedes = new Car();
$mercedes->model = "Mercedez Benz";
echo $mercedes->getModel();


class Car{
    private $model;
    
    public function getModel(){
        return "The car model is ".$this->model;
    }
}
$mercedes = new Car();
$mercedes->model = "Mercedez Benz";
echo $mercedes->getModel();
?>