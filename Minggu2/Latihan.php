<?php
class laptop{
      public $pemilik, $merk;
    
    function hidupkan_laptop(){
        $tampil = "Hidupkan laptop ".$this->merk." milik ".$this->pemilik;
        return $tampil;
    }
    function matikan_laptop(){
        $tampil = "Matikan laptop ".$this->merk." milik ".$this->pemilik;
        return $tampil;
    } 
    function restart_laptop(){
        $tampil = "Matikan laptop ".$this->merk." milik ".$this->pemilik.". Hidupkan laptop ".$this->merk." milik ".$this->pemilik."<br/>
        ";
        return $tampil;
    }
    function __construct($x,$y){
        $this->pemilik = $x;
        $this->merk = $y;
    }
}

$acer = new laptop("A", "ACER");
echo $acer->hidupkan_laptop()."<br/>";

$hp = new laptop("H", "HP");
echo $hp->matikan_laptop()."<br/>";

$ROG = new laptop("R", "ROG");
echo $ROG->restart_laptop()."<br/>";
?>