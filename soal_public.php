<?php
 
// buat class hutang
class Hutang {
 
   // buat public property
   public $kasbon;
 
   // buat public method
   public function Bayar() {
     return "Novi membayar hutangnya";
   }
}
  
// buat objek dari class hutang (instansiasi)
$hutang1 = new Hutang();
  
// set property
$hutang1->$kasbon=100000;
  
// tampilkan property
echo $hutang1->kasbon; // 100000
  
// tampilkan method
echo $hutang1->Bayar(); // "Bayar Hutang Anda"
?>