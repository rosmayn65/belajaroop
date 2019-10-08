<?php
 
// buat class wakil
class Wakil{
 
   // property dengan hak akses protected
   protected $wakil_hutang = "Novi Punya hutang 100000";
}
  
// buat class laptop
class Hutang extends Wakil{
   public function tampilkan_processor() {
     return $this->wakil_hutang;
   }
}
  
// buat objek dari class laptop (instansiasi)
$hutang1 = new Hutang();
  
// jalankan method
echo $hutang1->tampilkan_processor(); // "Intel Core i7-4790 3.6Ghz"
?>