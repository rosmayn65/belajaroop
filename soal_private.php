<?php
 
// buat class wakil
class Wakil {
   
   // property dengan hak akses protected
   private $wakil_hutang = "Novi punya hutang 100000";
   
   public function tampilkan_processor() {
     return $this->wakil_hutang;
   }
}
  
// buat class hutang
class Hutang extends Wakil{
  
   public function tampilkan_processor() {
     return $this->wakil_hutang;
   }
}
  
// buat objek dari class laptop (instansiasi)
$hutang2 = new Wakil();
$hutang1 = new Hutang();
  
// jalankan method dari class komputer
echo $hutang2->tampilkan_processor(); // "Intel Core i7-4790 3.6Ghz"
  
// jalankan method dari class laptop (error)
echo $hutang1->tampilkan_processor();
// Notice: Undefined property: laptop::$jenis_processor
?>