<?php
 
// buat class komputer
class Komputer {
   
   // property dengan hak akses protected
   private $jenis_processor = "Intel Core i7-4790 3.6Ghz";
   
   public function tampilkan_processor() {
     return $this->jenis_processor;
   }
}
  
// buat class laptop
class Laptop extends Komputer{
  
   public function tampilkan_processor() {
     return $this->jenis_processor;
   }
}
  
// buat objek dari class laptop (instansiasi)
$komputer_baru = new Komputer();
$laptop_baru = new Laptop();
  
// jalankan method dari class komputer
echo $komputer_baru->tampilkan_processor(); // "Intel Core i7-4790 3.6Ghz"
  
// jalankan method dari class laptop (error)
echo $laptop_baru->tampilkan_processor();
// Notice: Undefined property: laptop::$jenis_processor
?>