<?php
 
// buat class laptop
class Laptop {
 
   // buat public property
   public $pemilik;
 
   // buat public method
   public function Hidupkan_Laptop() {
     return "Hidupkan Laptop";
   }
}
  
// buat objek dari class laptop (instansiasi)
$laptop_anto = new Laptop();
  
// set property
$laptop_anto->pemilik="Anto";
  
// tampilkan property
echo $laptop_anto->pemilik; // Anto
  
// tampilkan method
echo $laptop_anto->Hidupkan_Laptop(); // "Hidupkan Laptop"
?>