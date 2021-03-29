<?php
class kendaraan{
    public $jeniskendaraan;
    public $jumlahroda;
    public $merk;
    public $bahanbakar;
    public $harga;
    public $tahunpembuatan;
    
    public function subsidiBBM(){
        $subsidi = 'Tidak';
        if($this -> bahanbakar == 'Premium' && $this -> tahunpembuatan < 2005){
            $subsidi = 'Ya';
        }
        return $subsidi;
    }
}
?>