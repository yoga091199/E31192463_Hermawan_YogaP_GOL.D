<?php
class Persegi implements hitungLuas{
    var $sisi;    
    
    public function hitungLuasPersegi($sisi){
        return $sisi * $sisi;
    }
    public function hitungLuasSegitiga($sisi){}
    public function hitungLuasLingkaran($sisi){}
}

class Segitiga implements hitungLuas{
    var $sisi;
    
    public function hitungLuasSegitiga($sisi){
        return $sisi * $sisi / 2;
    }
    public function hitungLuasPersegi($sisi){}
    public function hitungLuasLingkaran($sisi){}
}

class Lingkaran implements hitungLuas{
    private $radius;
  
    public function hitungLuasLingkaran($radius){
        return $radius * $radius * pi();
    }
    public function hitungLuasSegitiga($radius){}
    public function hitungLuasPersegi($radius){}
}
?>