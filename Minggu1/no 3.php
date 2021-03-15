<?php
class kendaraan{
    public  $jeniskendaraan,
            $jumlahroda,
            $merk,
            $bahanbakar,
            $harga,
            $tahunpembuatan;
    
    public function subsidiBBM(){
        $subsidi = 'Tidak';
        if($this -> bahanbakar == 'Premium' && $this -> tahunpembuatan < 2005){
            $subsidi = 'Ya';
        }
        return $subsidi;
    }
    public function hargaSecond(){
        if($this -> tahunpembuatan > 2010){
            $diskon = $this -> harga - ($this -> harga * 20/100);
        }else if($this -> tahunpembuatan >= 2005 && $this -> tahunpembuatan <= 2010){
            $diskon = $this -> harga - ($this -> harga * 30/100);
        }else if($this -> tahunpembuatan < 2005){
            $diskon = $this -> harga - ($this -> harga * 40/100);
        }
        return $diskon;
    }
}

$coba = new kendaraan();
$coba -> jeniskendaraan = 'Mobil';
$coba -> jumlahroda = 4;
$coba -> bahanbakar = 'Premium';
$coba -> harga = 110000000;
$coba -> tahunpembuatan = 2004;
    
echo "<h2>Latihan no.2 & 3</h2>".
     "Jenis Kendaraan: ".$coba -> jeniskendaraan."<br />".
     "Jumlah Roda: ".$coba -> jumlahroda."<br />".
     "Bahan Bakar: ".$coba -> bahanbakar."<br />".
     "Harga: Rp.".number_format($coba -> harga,2,',','.')."<br />".
     "Tahun: ".$coba -> tahunpembuatan."<br />".
     "Subsidi BBM: ".$coba -> subsidiBBM()."<br />".
     "Harga Akhir: Rp.".number_format($coba -> hargaSecond(),2,',','.')."<hr/> <br/>";

?>