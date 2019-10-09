<?php
    
// buat class laptop
class Laptop{

    // buat property untuk class laptop
    public $pemilik;
    public $merk;
    public $ukuran_layar;

    // buat method untuk class laptop
    public function Hidupkan_Laptop(){
        return "Hidupkan Laptop";
    }

    public function Matikan_Laptop(){
        return "Matikan Laptop";
    }
}

// buat objek dari clas laptop (instansiasi)
$laptop_anto = new Laptop();
$laptop_andi = new Laptop();
?>