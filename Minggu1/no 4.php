<?php
class ASkruk{
    public  $bahan,
            $Stang,
            $ukuran,
            $harga,
            $total;
    
    public function diskon(){
        $grandtotal = ($this->harga * $this->total);
        $hargaDiskon = $grandtotal;
        if($grandtotal >= 200000 && $grandtotal < 500000){
            $hargaDiskon = $grandtotal - ($grandtotal * 10/100);
        }else if($grandtotal >= 500000){
            $hargaDiskon = $grandtotal - ($grandtotal * 20/100);
        }
        return $hargaDiskon;
    }
    public function bonus(){
        $bonusBarang = 0;
        if($this -> total >= 12 && $this -> total < 24){
            $bonusBarang = 1;
        }else if($this -> total >= 24 ){
            $bonusBarang = 2;
        }
        return $bonusBarang;
    }
    public function tambahHarga(){
        if($this -> ukuran == '70'){
            $tambah = $this -> harga + 50000;
        }else if($this -> ukuran == '72'){
            $tambah = $this -> harga + 25000;
        }else if($this -> ukuran == '74'){
            $tambah = $this -> harga + 50000;
        }
        return $tambah;
    }
    function __construct($a, $b, $c, $d, $e){
        $this -> bahan = $a;
        $this -> Stang = $b;
        $this -> ukuran = $c;
        $this -> harga = $d;
        $this -> total = $e;
    }
    function Tampilkan(){
        $hasil ="<h2>Latihan no.4</h2>".
                "Bahan: ".$this -> bahan."<br />".
                "Stang: ".$this -> Stang."<br />".
                "Ukuran: ".$this -> ukuran."<br />".
                "Harga: Rp.".number_format($this -> harga,2,',','.')."<br />".
                "Total: ".$this -> total."<br />".
                "Harga Total: Rp.".number_format($this -> diskon(),2,',','.')."<br />".
                "Bonus: ".$this -> bonus()." ".$this -> bahan."<hr />";
        return $hasil;
    }
}

$pesan = new Askruk('MP', 'RX Z', '70',1250000, 24);
echo $pesan -> Tampilkan();

?>