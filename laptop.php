<?php
// class laptop
class Laptop {
  
   // property untuk class laptop
   var $pemilik;
   var $merk;
   var $ukuran_layar;
  
   // method untuk class laptop
   function Hidupkan_laptop() {
     return "Hidupkan Laptop";
    }
   function Matikan_laptop() {
     return "Matikan Laptop";
   }
}
  
// objek dari class laptop (instansiasi)
// instansiasi ditandai dengan keyword 'new'
$laptop_anto = new Laptop();
  
// set property
$laptop_anto->pemilik="Anto";
$laptop_anto->merk="Asus";
$laptop_anto->ukuran_layar="15 inchi";
  
// tampilkan property
echo "Merk Laptop $laptop_anto->merk, pemilik $laptop_anto->pemilik, ukuran layarnya $laptop_anto->ukuran_layar";
echo "<br>";
// tampilkan method
echo $laptop_anto->hidupkan_laptop();
echo "<br />";
echo $laptop_anto->matikan_laptop();
?>