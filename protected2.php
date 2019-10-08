<?php
 
// buat class laptop
class Laptop {
 
   // buat protected property
   protected $pemilik="Anto";
 
   public function Akses_Pemilik() {
      return $this->pemilik;
   }
   protected function Hidupkan_Laptop() {
      return "Hidupkan Laptop";
   }
   public function Paksa_Hidup() {
      return $this->Hidupkan_Laptop();
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_anto = new Laptop();
  
// jalankan method akses_pemilik()
echo $laptop_anto->Akses_Pemilik(); // "Anto"
  
// jalankan method paksa_hidup()
echo $laptop_anto->Paksa_Hidup(); // "Hidupkan Laptop"
?>