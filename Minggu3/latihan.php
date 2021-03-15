<?php
class kalkulator{
    
    private $bil1, $bil2, $bil3;
    
    function tambah(){
        $hasil = $this->bil1 + $this->bil2 + $this->bil3;
        return "Hasil dari penjumlahan adalah ".$hasil."<br/>";
    }
    function kurang(){
        $hasil = $this->bil1 - $this->bil2 - $this->bil3;
        return "Hasil dari pengurangan adalah ".$hasil."<br/>";
    }
    function bagi(){
        $hasil = $this->bil1 / $this->bil2 / $this->bil3;
        return "Hasil dari pembagian adalah ".number_format($hasil, 2, '.', ',')."<br/>";
    }
    function kali(){
        $hasil = $this->bil1 * $this->bil2 * $this->bil3;
        return "Hasil dari perkalian adalah ".$hasil;
    }
    function __construct($a, $b, $c){
        $this->bil1 = $a;
        $this->bil2 = $b;
        $this->bil3 = $c;
    }
}


$hitung1 = new kalkulator(3,3,3);
echo $hitung1->tambah();

$hitung2 = new kalkulator(3,3,3);
echo $hitung1->kurang();

$hitung3 = new kalkulator(4,4,4);
echo $hitung3->bagi();

$hitung4 = new kalkulator(2,2,2);
echo $hitung4->kali();
?>